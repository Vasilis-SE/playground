#include <stdio.h>
#include <string.h>

union User
{
    char name[50];
    int age;
    double balance;
};

// Declare functions
void printUser(union User user);
void printUserByPointer(union User *ptr);

int main()
{
    union User user1;
    union User user2;
    union User user3;

    /**
     * The first 2 properties of the first 2 users are corrupted. That happens
     * due to the fact that the last property occupied the memory location.
     * 
     * On the 3rd user after each initialization we print each property and thus
     * everything works perfectly because each property afterwards replaces the 
     * previous on memory.
     */

    strcpy(user1.name, "Jonathan Mayers");
    user1.age = 26;
    user1.balance = 214.53;

    strcpy(user2.name, "Emily Mayers");
    user2.age = 18;
    user2.balance = 45.78;

    printUser(user1);
    printUserByPointer(&user2);

    printf("========================= \n");
    strcpy(user3.name, "John Doe");
    printf("Name: %s \n", user3.name);
    user3.age = 87;
    printf("Age: %i \n", user3.age);
    user3.balance = 432.11;
    printf("Balance: %f \n", user3.balance);

    printf("\n\n============ Sizes ============\n");
    printf("Size of user1: %i\n", sizeof(user1));
    printf("Size of user2: %i\n", sizeof(user2));
    printf("Size of user3: %i\n", sizeof(user3));
    printf("===============================\n");

    return 0;
}

void printUser(union User user)
{
    printf("========================= \n");
    printf("Name: %s \n", user.name);
    printf("Age: %i \n", user.age);
    printf("Balance: %f \n", user.balance);
}

void printUserByPointer(union User *ptr)
{
    printf("========================= \n");
    printf("Name: %s \n", ptr->name);
    printf("Age: %i \n", ptr->age);
    printf("Balance: %f \n", ptr->balance);
}