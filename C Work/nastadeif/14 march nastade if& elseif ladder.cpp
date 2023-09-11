#include<stdio.h>
main()
{
	int marks;
	printf("enter your marks:");
	scanf("%d", &marks);
	if (marks<=100 && marks > 0)
	{
		if (marks>= 90 && marks < 100)
		{
			printf("A grade");
		}else if(marks>= 80 && marks < 90)
			{
			printf("B grade");
		}else if(marks>= 70 && marks < 80)
			{
			printf("C grade");
		}else if(marks>= 50 && marks < 70)
			{
			printf("D grade");
		}else if(marks>= 35 && marks < 50)
			{
			printf("E grade");
		}else if(marks < 35)
		{
			printf("Fail");
		}
	} else{
		printf("you have entered wrong value");
	}
}

