using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
    class Program
    {
        public static int Total(int a)
        {
            int Sum = 0;
            for (int i = 0; i <= a; i++)
            {
                Sum += i;
            }
            return Sum;
        }
        public static int TotalArr(int[] a)
        {
            var Sum = 0;
            foreach (int items in a)
            {
                Sum += items;
            }
            return Sum;
        }


        static void Main(string[] args)
        {
            Console.Write("Moi ban nhap so a?       ");
            var a = Console.ReadLine();
            Console.Write("Moi ban nhap so b?        ");
            var b = Console.ReadLine();
            Console.Write("Moi ban nhap so c?        ");
            var c = Console.ReadLine();
            Console.WriteLine("Phuong trinh cua ban co dang:         " + a + "x^2 + " + b + "x + " + c + " = 0");
            double Delta = Math.Pow(Int32.Parse(b), 2) - (4 * Int32.Parse(a) * Int32.Parse(c));
            var NKep = -(Int32.Parse(b) / (2 * Int32.Parse(a)));
            double N1 = -((Int32.Parse(b) + Math.Sqrt(Delta)) / 2 * Int32.Parse(a));
            double N2 = -((Int32.Parse(b) - Math.Sqrt(Delta)) / 2 * Int32.Parse(a));
            Console.WriteLine("Gia tri cua Delta la:    " + Delta);
            if(Int32.Parse(a) + Int32.Parse(b) + Int32.Parse(c) == 0)
            {
                Console.WriteLine("Phuong trinh co nghiem  X1=       1");
                Console.WriteLine("Phuong trinh co nghiem  X2=     " + (Int32.Parse(c)/ Int32.Parse(a)));
            }
            else if (Int32.Parse(a) - Int32.Parse(b) + Int32.Parse(c) == 0)
            {
                Console.WriteLine("Phuong trinh co nghiem  X1=      -1");
                Console.WriteLine("Phuong trinh co nghiem  X2=     " + (-(Int32.Parse(c) / Int32.Parse(a))));
            }
            else if (Delta < 0)
            {
                Console.WriteLine("Phuong trinh vo nghiem");

            }
            else if (Delta == 0)
            {
                Console.WriteLine("Phuong trinh co nghiem kep X1=X2 =       :" + NKep);
            }
            else if (Delta > 0)
            {
                Console.WriteLine("Phuong trinh co hai nghiem phan biet -> Nghiem 1 = :     " + N1);
                Console.WriteLine("Phuong trinh co hai nghiem phan biet -> Nghiem 2 = :     " + N2);
            }
            Console.ReadKey();
        }
    }
}
