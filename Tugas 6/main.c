#include <stdio.h>
#include <string.h>

int main() {
    char nama[50], namaBarang[50];
    int pilih, harga, jumlah;

    printf("Selamat Datang Di Toko AA\n\n");
    printf("Masukan nama: ");
    scanf("%s", nama);

    printf("1. Buku - 5000\n");
    printf("2. Pulpen - 3000\n");
    printf("3. Pensil - 2500\n");
    printf("4. Penghapus - 1500\n");
    printf("5. Penggaris - 4000\n");

    printf("Pilih barang: "); scanf("%d", &pilih);
    switch (pilih)
    {
    case 1:
        strcpy(namaBarang, "Buku");
        harga = 5000;
        break;
    case 2:
        strcpy(namaBarang, "Pulpen");
        harga = 3000;
        break;
    case 3:
        strcpy(namaBarang, "Pensil");
        harga = 2500;
        break;
    case 4:
        strcpy(namaBarang, "Penghapus");
        harga = 1500;
        break;
    case 5:
        strcpy(namaBarang, "Penggaris");
        harga = 4000;
        break;
    
    default:
        break;
    }

    printf("Jumlah barang: "); scanf("%d", &jumlah);

    printf("\n\n\t===Daftar Pesanan===\n");
    printf("Nama: %s\n", nama);
    printf("Nama barang: %s\n", namaBarang);
    printf("Total: %d\n", harga * jumlah);
}