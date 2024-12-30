#include <stdio.h>
#include <stdlib.h>

int main( int argc, char *argv[] )  {
    if(argc <= 1) {
        printf("There are no arguments provided...\n");
        exit(EXIT_FAILURE);
    }

    printf("Arguments provided:\n");
    int i, x;
    int ch = 0;
    for (i=1; i<argc; i++) {
        printf("\t> %s\n", argv[i]);
    }

    exit(EXIT_SUCCESS);
}