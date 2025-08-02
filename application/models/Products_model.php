<?php

use App\entities\product\Product_entity;

class Products_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

        /** @var Product_entity[] */
    private array $allProducts = [];

    /** @var Product_entity[] keyed by slug & id */
    private array $byLink = [];

    private function ensureLoaded(): void
    {
        if ($this->allProducts) return;

        $cfg  = json_decode(file_get_contents(APPPATH.'data/products.json'), true) ?: [];
        $base = rtrim($cfg['BasePath'] ?? '', '/');

        foreach ($cfg['categories'] as $cat) {
            foreach ($cat['products'] as $item) {
                $p = (new Product_entity())
                    ->setName($item['productName'] ?? '')
                    ->setLink($item['productId']   ?? '')
                    ->setSlug($item['slug']        ?? '')
                    ->setPhotos(array_map(
                        fn($f)=> base_url("$base/$f"),
                        $item['photos'] ?? []
                    ));

                $this->allProducts[]              = $p;
                $this->byLink[$p->getLink()]      = $p;
                $this->byLink[$p->getSlug()]      = $p;
            }
        }
    }

    public function getByLink(string $key): ?Product_entity
    {
        $this->ensureLoaded();
        return $this->byLink[$key] ?? null;
    }

    /** Yeni: isme göre filtrele */
    public function searchByName(string $term): array
    {
        $this->ensureLoaded();
        $term = mb_strtolower(trim($term));
        $matches = [];
        foreach ($this->allProducts as $p) {
            if (mb_stripos($p->getName(), $term) !== false) {
                $matches[] = [
                  'name' => $p->getName(),
                  'slug' => $p->getSlug(),
                ];
            }
        }
        return $matches;
    }
}