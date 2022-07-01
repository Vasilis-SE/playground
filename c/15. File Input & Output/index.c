#include <stdio.h>

#define BUFFER_SIZE 255

int main()
{
    FILE *fpr, *fpw;
    char buff[BUFFER_SIZE];

    fpr = fopen("./article.txt", "r");
    fpw = fopen("./testing.txt", "w");

    // fscanf will stop reading after encountering the first white space.
    fscanf(fpr, "%s", buff);
    printf("%s\n", buff);
    printf("======================\n");

    while (fgets(buff, sizeof buff, fpr) != NULL)
    {
        fgets(buff, BUFFER_SIZE, (FILE *)fpr);
        printf("%s\n", buff);
    }
    printf("======================\n");
    fclose(fpr);

    fprintf(fpw, "This is testing for fprintf...\n");
    fputs("This is testing for fputs...\n", fpw);
    fclose(fpw);

    return 0;
}