#include <fstream>
#include <iostream>
#include <string>
#include <sstream>

using namespace std;

int main() {
    string text;
    string article;

    // Writing file
    ofstream outFile;
    outFile.open("sometext.txt", ios::out | ios::trunc);

    cout << "Enter a text: " << endl;
    std::getline(std::cin, text);
    cin.ignore();

    outFile << text;
    outFile.close();

    // Reding file
    std::string line;
    std::ifstream inputFile ("article.txt");
    while (std::getline(inputFile, line))
        cout << line << endl;
    
    inputFile.close();

    return 0;
}
