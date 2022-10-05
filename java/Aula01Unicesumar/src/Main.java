import javax.swing.*;


public class Main {
    public static void main(String[] args) {
        System.out.println("Olá, bem vindo ao seu primeiro programa JAVA.");
        JOptionPane.showMessageDialog(null, "Olá, bem vindo ao seu primeiro programa JAVA.");

      int age = 0;
      double price = 0;
      String name = "";

        String ageStr = JOptionPane.showInputDialog("Digite a idade da pessoa:");
        age = Integer.parseInt(ageStr);

        String priceStr = JOptionPane.showInputDialog("Digite o preço do produto:");
        price = Double.parseDouble(priceStr);

        name = JOptionPane.showInputDialog("Qual o nome da pessoa?:");

        if(age >= 18) {
            JOptionPane.showMessageDialog(null, name + ", o produto custa R$ " + price);
        }else{
            JOptionPane.showMessageDialog(null, name + ", sua idade "+age+" não permite a compra deste produto");
        }

    }
}