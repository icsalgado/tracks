using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace EstudoSwitch
{
    public partial class frmSwitch : Form
    {
        public frmSwitch()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void btnVerificarNumero_Click(object sender, EventArgs e)
        {
            int numero = Convert.ToInt32(txbNumero.Text);

            switch (numero)
            {
                case 0:
                case 1:
                case 2:
                case 3:
                    MessageBox.Show("Numero Baixo");
                    break;
                case 4:
                case 5:
                case 6:
                    MessageBox.Show("Numero Médio");
                    break;
                case 7:
                case 8:
                case 9:
                case 10:
                    MessageBox.Show("Numero Alto");
                    break;
                default:
                    MessageBox.Show("Não válido");
                    break;
            }
        }
    }
}
