using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp1
{
   public class SinhVien
    {
        public string name { get; set; }
        public string mssv { get; set; }

        public SinhVien(string mssv,string name)
        {
            this.name = name;
            this.mssv = mssv;
        }
        public override string ToString()
        {
            return name +"\t"+ mssv;
        }
    }
}
