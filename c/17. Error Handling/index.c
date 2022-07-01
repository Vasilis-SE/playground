#include <stdio.h>
#include <errno.h>
#include <string.h>
#include <stdlib.h>

extern int errno;

int main()
{
    FILE *pf;
    int errnum;
    pf = fopen("file_that_doesnot_exist.txt", "rb");

    if (pf == NULL) {
        errnum = errno;
        fprintf(stderr, "Value of errno: %d\n", errno);
        perror("Error printed by perror");
        fprintf(stderr, "Error opening file: %s\n", strerror(errnum));
        exit(EXIT_FAILURE);
    } else {
        fclose(pf);
    }

    exit(EXIT_SUCCESS);
}