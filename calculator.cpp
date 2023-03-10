#include <stdio.h>

int main (){
	int a, b, hasil;
	char op;
	
	printf("Calculator Ajaib\n");
	printf("Masukkan angka I\n");
	scanf("%d", &a);
	
	printf("Masukkan operatornya\n");
	scanf("%s", &op);
 	
	printf("Masukkan angka II\n");
	scanf("%d", &b);
	
	
	printf("Hasil inputan anda %d %c %d\n", a,op,b); 
	if (op == '+') {
		hasil = a+b;
	} else if (op== '-') {
		hasil = a-b;
	} else if (op == '/') {
		hasil = a/b;
	} else if (op == '*') {
	  	hasil = a*b;
	} else {
		printf ("Operator tidak sesuai\n") ;
		return 0;
	}
	
	
	printf ("Hasil : %d\n",hasil ) ;

	return 0;
}
