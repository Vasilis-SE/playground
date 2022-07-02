#include <stdio.h>

int main()
{
    // Basic declaration
    int myarray[3];

    // Declaration and populate data
    double bal1[3] = {3.2, 1.5, 7.32};
    double bal2[] = {3.2, 1.5, 7.32};

    int i;

    printf("\n1st Balance List\n");
    printf("==================================\n");
    for (i = 0; i < sizeof(bal1) / sizeof(double); i++)
        printf("%i is %f\n", (i + 1), bal1[i]);

    printf("\n2nd Balance List\n");
    printf("==================================\n");
    for (i = 0; i < sizeof(bal2) / sizeof(double); i++)
        printf("%i is %f\n", (i + 1), bal2[i]);

    return 0;
}