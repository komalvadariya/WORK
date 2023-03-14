#include<stdio.h>
main(){
  int marks;
  printf("enter your marks:");
  scanf("%d",&marks);
  
  if(marks>=90 && marks<=100)
  {
  	printf("A grade");
  }
  else if (marks >80 && marks <90)
  {
  	printf("B grade");
  }
  else if (marks >50 && marks <=80)
  {
  	printf("C grade");
  }
  else if (marks >33 && marks <=50)
  {
  	printf ("D grade");
  }
  else if (marks >0 && marks <= 33)
  {
  	printf("fail");
  }
  else {
  	printf("invalid input");
  }
}
