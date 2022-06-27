#include <stdio.h>

const int MAX = 3;

int main()
{
   int var1 = 30;
   int *var1ptr = &var1; // Declare pointer to var1

   // Access both address of var1 and its value
   printf("Address of var1 variable: %x and the value: %i \n", var1ptr, *var1ptr);

   int var2[] = {10, 100, 200};
   int i, *var2ptr[MAX];

   for (i = 0; i < MAX; i++)
   {
      var2ptr[i] = &var2[i];
      printf("Value of var2ptr[%d] = %d, Address: %x \n", i, *var2ptr[i], &var2ptr[i]);
   }

   return 0;
}