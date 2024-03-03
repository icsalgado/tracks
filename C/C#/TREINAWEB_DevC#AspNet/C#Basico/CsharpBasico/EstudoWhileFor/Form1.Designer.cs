
namespace EstudoWhileFor
{
    partial class frmEstruturasRepetição
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.label1 = new System.Windows.Forms.Label();
            this.txbNumero = new System.Windows.Forms.TextBox();
            this.lsbResultados = new System.Windows.Forms.ListBox();
            this.btnCalcular = new System.Windows.Forms.Button();
            this.lsbResultadoWhile = new System.Windows.Forms.ListBox();
            this.SuspendLayout();
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Location = new System.Drawing.Point(27, 28);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(157, 25);
            this.label1.TabIndex = 0;
            this.label1.Text = "Digite um número";
            // 
            // txbNumero
            // 
            this.txbNumero.Location = new System.Drawing.Point(219, 28);
            this.txbNumero.Name = "txbNumero";
            this.txbNumero.Size = new System.Drawing.Size(150, 31);
            this.txbNumero.TabIndex = 1;
            // 
            // lsbResultados
            // 
            this.lsbResultados.FormattingEnabled = true;
            this.lsbResultados.ItemHeight = 25;
            this.lsbResultados.Location = new System.Drawing.Point(388, 28);
            this.lsbResultados.Name = "lsbResultados";
            this.lsbResultados.Size = new System.Drawing.Size(180, 279);
            this.lsbResultados.TabIndex = 2;
            // 
            // btnCalcular
            // 
            this.btnCalcular.Location = new System.Drawing.Point(219, 79);
            this.btnCalcular.Name = "btnCalcular";
            this.btnCalcular.Size = new System.Drawing.Size(150, 34);
            this.btnCalcular.TabIndex = 3;
            this.btnCalcular.Text = "Calcular";
            this.btnCalcular.UseVisualStyleBackColor = true;
            this.btnCalcular.Click += new System.EventHandler(this.btnCalcular_Click);
            // 
            // lsbResultadoWhile
            // 
            this.lsbResultadoWhile.FormattingEnabled = true;
            this.lsbResultadoWhile.ItemHeight = 25;
            this.lsbResultadoWhile.Location = new System.Drawing.Point(587, 28);
            this.lsbResultadoWhile.Name = "lsbResultadoWhile";
            this.lsbResultadoWhile.Size = new System.Drawing.Size(180, 279);
            this.lsbResultadoWhile.TabIndex = 4;
            // 
            // frmEstruturasRepetição
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(10F, 25F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(872, 336);
            this.Controls.Add(this.lsbResultadoWhile);
            this.Controls.Add(this.btnCalcular);
            this.Controls.Add(this.lsbResultados);
            this.Controls.Add(this.txbNumero);
            this.Controls.Add(this.label1);
            this.Name = "frmEstruturasRepetição";
            this.Text = "Estruturas de repetição";
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox txbNumero;
        private System.Windows.Forms.ListBox lsbResultados;
        private System.Windows.Forms.Button btnCalcular;
        private System.Windows.Forms.ListBox lsbResultadoWhile;
    }
}

