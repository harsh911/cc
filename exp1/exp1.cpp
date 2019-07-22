#include <bits/stdc++.h>
#include <iostream>
#include <fstream>
#include <string>
using namespace std;

bool check_operator(char x){
    char operators[] = {'<','>','+','-','/','*','=','&','|','#','\\','?'};
    int osize = sizeof(operators)/sizeof(operators[0]) ; //number of keywords
    for(int j=0;j<osize;j++)
        if(x == operators[j]) return true;
    return false;
}
bool check_delimiter(char x){
    char delim[] = {'{','}','(',')',';',',','\'','\"'};
    int dsize = sizeof(delim)/sizeof(delim[0]) ; //number of keywords
    for(int j=0;j<dsize;j++)
        if(x == delim[j]) return true;
    return false;
}

bool check_keyword(string words){
    string keywords[] = {"int","float","void","main","while","for","char","printf","scanf","include","stdio","return"};
    int ksize = sizeof(keywords)/sizeof(keywords[0]) ; //number of operators
    for(int j=0;j<ksize;j++)
        if(words == keywords[j]) return true;
    return false;
}

int main(){
    bool key,oper;
    ifstream file;
    file.open("test.cpp");
    char x;
    while(file >> noskipws >> x){
        string words,digits;
        words = "";
        digits = "";
        key = false;
        if(x == ' ' ) file >> noskipws >> x;

        if(check_operator(x)){
            cout<<"\nOperator : "<<x;
        }
        else if(check_delimiter(x)){
            cout<<"\nDelimiter : "<<x;
        }
        else if(isdigit(x)){
            while(isdigit(x)||x=='.'){
                digits+=x;
                file >> noskipws >> x;
            }
            cout<<"\nOperand : "<<digits;
        }
        else if(isalpha(x)){
            while(isalpha(x) || isdigit(x) || x=='_'){
                words+=x;
                file >> noskipws >> x;
            }

            if(check_keyword(words))
                cout<<"\nKeyword : "<<words;
            else cout<<"\nVariable : "<<words;

            if(check_operator(x))  cout<<"\nOperator : "<<x;
            if(check_delimiter(x))  cout<<"\nDelimiter : "<<x;
         }
    }
    file.close();
    return 0;
}
