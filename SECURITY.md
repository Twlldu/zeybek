# Security Policy — Zeybekhome

Zeybekhome projelerinin güvenliği bizim için önemlidir. Bir güvenlik açığı bulduğunuzu düşünüyorsanız lütfen sorumlu ifşa (responsible disclosure) sürecini takip edin.

## Supported Versions

Aşağıdaki sürümler güvenlik güncellemesi alır:

- **main / master** (aktif geliştirme dalı)
- Son **stabil** sürüm(ler)

> Not: Eski sürümler için güvenlik düzeltmesi garanti edilmez. Mümkünse her zaman en güncel sürüme geçin.

## Reporting a Vulnerability

Lütfen güvenlik açıklarını **public issue** olarak açmayın.

**Tercih edilen bildirim yöntemleri:**
1. GitHub “Security Advisories” (önerilir)
2. E-posta: **<utkuodabasi44@gmail.com>** (ör. security@zeybekhome.com)
3. Alternatif kanal: **<utkuodabasi6@gmail.com>** (ör. Discord/Slack/Telegram – özel mesaj)

### Bildirimde şunlar olsun
- Açığın kısa özeti ve etkisi (yetkisiz erişim, veri sızıntısı, RCE vb.)
- Etkilenen bileşen / endpoint / modül
- Versiyon / commit bilgisi
- Yeniden üretme adımları (PoC varsa güvenli şekilde)
- Log, ekran görüntüsü, hata mesajı (varsa)
- Önerilen düzeltme veya mitigasyon (varsa)

### Yanıt süreci (hedef)
- **İlk geri dönüş:** 72 saat içinde
- **Triyaj & doğrulama:** 7 gün içinde (karmaşıklığa göre değişebilir)
- **Düzeltme yayınlama:** Etkiye göre önceliklendirilir

> Süreler “hedef”tir; kritik açıklar daha hızlı ele alınır.

## Scope

**Kapsam içi (örnek):**
- Kimlik doğrulama / yetkilendirme hataları
- Veri sızıntısı, IDOR, erişim kontrolü
- RCE / SSRF / SQLi / XSS (projeye göre)
- Supply-chain / bağımlılık zafiyetleri (doğrulanabilir olanlar)

**Kapsam dışı (örnek):**
- DDoS / rate-limit eksikliği (kanıtlanmış kritik etki yoksa)
- Sosyal mühendislik
- Fiziksel saldırılar
- 3. parti servislerin kendi açıkları (doğrudan projeyi etkilemiyorsa)

## Safe Harbor

İyi niyetli güvenlik araştırmalarını destekliyoruz. Aşağıdaki şartlara uyulduğu sürece, bildiriminiz nedeniyle yasal işlem başlatmayı hedeflemeyiz:
- Verilere zarar vermeden, sadece gerekli minimum testleri yapmanız
- Kullanıcı verisi toplamamanız / ifşa etmemeniz
- Açığı kamuya açıklamadan önce bize makul süre tanımanız

## Disclosure

Zeybekhome, düzeltme yayınlandığında (veya risk gerekli görürse) bir güvenlik duyurusu yayınlayabilir.
Kritik durumlarda geçici önlem (mitigation) önerileri paylaşılabilir.

## Credits

Talep etmeniz durumunda (ve uygun görülürse) güvenlik katkınız için teşekkür notu/credit verilebilir.

---

## English (brief)

If you believe you found a security vulnerability in **Zeybekhome**, please **do not** open a public issue.
Report it via GitHub Security Advisories or email **<SECURITY_CONTACT_EMAIL>** with details and reproduction steps.
We aim to respond within **72 hours**.
