#include <iostream>
#include <string>
#include <windows.h>
#include <conio.h>
#include <ctime>
using namespace std;

void printArray(int a[5][5])
{
    for (int i=0;i<5;i++)
    {
        for(int j=0;j<5;j++)
        {
            cout << a[i][j] << " ";
        }
        cout << endl;
    }
}

bool isSafe(int a[5][5], int x, int y)
{
    if(a[y][x]==1)
        return true;
    return false;
}

void ceksolver(int solver[5][5],int x, int y)
{
    int dilewati[5][5] = {{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0}};
    dilewati[y][x] = 2;
    printArray(dilewati);
}

bool BacktrackCoba(int a[5][5], int x, int y, int solver[5][5])
{
    if(x==4&&y==4)
    {
        solver[y][x] = 1;
        printArray(solver);
    }
    else
    {
//        printArray(solver);
//        cout << "============" << endl;
//        ceksolver(solver,x,y);
//        cout << endl;
//        getch();
//        system("cls");
        if(isSafe(a,x,y)==true && solver[y][x] != 1)
        {
            solver[y][x] = 1;
            if(BacktrackCoba(a,x+1,y,solver)==true)      //kanan
            {
                return true;
            }
            else if (BacktrackCoba(a,x,y+1,solver)==true) //bawah
            {
                return true;
            }
            else if (BacktrackCoba(a,x-1,y,solver)==true)   //kiri
            {
                return true;
            }
            else if (BacktrackCoba(a,x,y-1,solver)==true)   //atas
            {
                return true;
            }
            else
            {
                solver[y][x] = 0;
                return false;
            }
        }
        else
        {
            return false;
        }
    }
//    if(isSafe(a,x,y)==true)
//    {
//        solver[x][y] = 1;
//        if(BacktrackCoba(a,x+1,y,solver)==true)
//        {
//            return true;
//        }
//        else if (BacktrackCoba(a,x,y+1,solver)==true)
//        {
//            return true;
//        }
//        solver[x][y] = 0;
//        return false;
//    }
//    return false;
}

void BacktrackSolver(int a[5][5])
{
    int solver[5][5] = {{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0},{0,0,0,0,0}};
//    BacktrackCoba(a,0,0,solver);
    if(BacktrackCoba(a,0,0,solver)== false)
    {
        printArray(solver);
    }
}



int main()
{
    int a[5][5] = {
                {1,0,1,1,1},
                {1,0,1,0,1},
                {1,0,1,1,1},
                {1,0,1,0,1},
                {1,1,1,0,1}
                };
    cout << "Map" << endl;
    printArray(a);
    cout << "========SOLVING========" << endl;
    BacktrackSolver(a);
    return 0;
}
