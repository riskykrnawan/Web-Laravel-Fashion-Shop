# NIKKY Fashion Shop

Ini adalah aplikasi berbasis website yang dapat digunakan untuk menjual barang secara online

| Table of Contents  |
| :----------------  |
| <a href="#Feature">Feature</a>     |
| <a href="#Development">Development</a>     |

<!-- | <a href="#Technology">Technology</a>     | -->

## Feature

Aplikasi ini menyediakan fitur sebagai berikut:


| Feature                                                        | Customer | Admin  |
| -------------------------------------------------------------- | :-: | :-: |
| Home (Halaman utama untuk menampilkan barang, promo, dll)      | ✅ | ✅ |
| Login & Register                                               | ✅ | ✅ |
| Wishlist                                                       | ✅ | ❌ |
| Cart                                                           | ✅ | ❌ |
| History Order                                                  | ✅ | ❌ |
| Profile                                                        | ✅ | ❌ |
| Panel Products                                                 | ❌ | ✅ |
| Panel User                                                     | ❌ | ✅ |
| Panel Orders (Menerima / menolak orderan dari pelanggan)       | ❌ | ✅ |

## Development

```bash
git clone
cd fashion-shop-nikky
``` 

```bash
composer upgrade
npm install
```     

Don't forget to create .env ❗


```bash
php artisan key:generate
```     

```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```     

```bash
npm run dev
```     
