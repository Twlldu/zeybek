<?php namespace app\entities\product;

class Product_entity
{
    private string $name;
    private string $link;    // UUID
    private string $slug;
    private array  $photos;

    public function setName(string $n): self  { $this->name = $n; return $this; }
    public function setLink(string $l): self  { $this->link = $l; return $this; }
    public function setSlug(string $s): self  { $this->slug = $s; return $this; }
    public function setPhotos(array $p): self { $this->photos = $p; return $this; }

    public function getName(): string   { return $this->name; }
    public function getLink(): string   { return $this->link; }
    public function getSlug(): string   { return $this->slug; }
    public function getPhotos(): array  { return $this->photos; }

    public function toArray(): array
    {
        return [
            'name'   => $this->name,
            'id'     => $this->link,
            'slug'   => $this->slug,
            'photos' => $this->photos,
        ];
    }
}
