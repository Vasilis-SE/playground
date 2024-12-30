#include <stdio.h>
#include <string.h>

/**
 * Structs store each separate properties into different
 * memory locations.
 */

struct User
{
    char name[50];
    int age;
    double balance;
};

// Declare functions
void printUser(struct User user);
void printUserByPointer(struct User *ptr);

int main()
{
    struct User user1;
    struct User user2;
    struct User user3;

    // Populate data
    strcpy(user1.name, "Jonathan Mayers");
    user1.age = 26;
    user1.balance = 214.53;

    strcpy(user2.name, "Emily Mayers");
    user2.age = 18;
    user2.balance = 45.78;

    strcpy(user3.name, "John Doe");
    user3.age = 87;
    user3.balance = 432.11;

    printUser(user1);
    printUser(user2);
    printUserByPointer(&user3);

    printf("\n\n============ Sizes ============\n");
    printf("Size of user1: %i\n", sizeof(user1));
    printf("Size of user2: %i\n", sizeof(user2));
    printf("Size of user3: %i\n", sizeof(user3));
    printf("===============================\n");

    return 0;
}

void printUser(struct User user)
{
    printf("========================= \n");
    printf("Name: %s \n", user.name);
    printf("Age: %i \n", user.age);
    printf("Balance: %f \n", user.balance);
}


void printUserByPointer(struct User *ptr)
{
    printf("========================= \n");
    printf("Name: %s \n", ptr->name);
    printf("Age: %i \n", ptr->age);
    printf("Balance: %f \n", ptr->balance);
}