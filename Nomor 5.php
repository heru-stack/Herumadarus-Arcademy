<?php
public class PassingArray{
  
  public static void main (String args []){
    tampilkanElemenArray(new int [] {5, 6, 7, 8, 9,10});
  }
  
  public static void tampilkanElemenArray(int array []){
    System.out.print("Elemen array adalah: ");
    
    for (int i = 0; i < array.length; i++) {
      System.out.print(array[i] + " ");
	}
  }
 
}
?>