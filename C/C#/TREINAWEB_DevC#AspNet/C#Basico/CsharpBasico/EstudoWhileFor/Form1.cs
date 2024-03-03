using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace EstudoWhileFor
{
    public partial class frmEstruturasRepetição : Form
    {
        public frmEstruturasRepetição()
        {
            InitializeComponent();
        }

        private void btnCalcular_Click(object sender, EventArgs e)
        {
            int numero = Convert.ToInt32(txbNumero.Text);
            //For
            for (int i = 1; i <=10; i++)
            {
                lsbResultados.Items.Add(string.Format("{0} x {1} = {2}", numero, i, numero * i));
            }
            int j = 1;
            while (j <= 10)
            {
                lsbResultadoWhile.Items.Add(string.Format("{0} ^ 2 = {1}", numero, numero * 2));
                numero = numero * 2;
                j++;
            }
        }
    }
}
