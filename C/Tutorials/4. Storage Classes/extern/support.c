#include <stdio.h>

extern int count;

void write_extern(void)
{
    printf("Start counting...\n");

    int i;
    for (i = 1; i <= count; i++)
    {
        printf("Count: %d\n", i);
    }

    printf("BOOM!!!!\n");
}