<?php
public class MethodReturn {

	public static String nama = "Heru Madarus";

	public static String getNama(){
		return nama;
	}

	public static int hitungUmur(int lahir, int sekarang){
		int umur = sekarang - lahir;
		return umur;
	}

	public static String alamat = "Pakjo Palembang";

	public static String getNama(){
		return alamat;

	}

	public static String hobi = "Membaca Al-Quran";

	public static String getNama(){
		return hobi;

	}

	public static String status = "Belum Menikah";

	public static String getNama(){
		return status;

	}

	public static String lulusan = "Polsri";

	public static String getNama(){
		return lulusan;

	}

	public static String kemampuan = "beginner";

	public static String getNama(){
		return kemampuan;

	}

	public static String minat = "ya";

	public static String getNama(){
		return minat;

	}

	public static void main(String[] args){

		String namaSaya = getNama();
		System.out.println("Nama saya: "+namaSaya);

		int umurSaya = hitungUmur(1998, 2020);
		System.out.println("Umur saya: "+umurSaya);

		String alamatSaya = getAlamat();
		System.out.println("Alamat saya: "+alamatSaya);

		String hobiSaya = getHobi();
		System.out.println("Hobi saya: "+hobiSaya);

		String statusSaya = getStatus();
		System.out.println("Status saya: "+statusSaya);

		String lulusanSaya = getLulusan();
		System.out.println("Lulusan saya: "+lulusanSaya);

		String kemampuanSaya = getKemampuan();
		System.out.println("Kemampuan saya: "+kemampuanSaya);

		String minatSaya = getMinat();
		System.out.println("Minat saya: "+minatSaya);
	}

}
?>
