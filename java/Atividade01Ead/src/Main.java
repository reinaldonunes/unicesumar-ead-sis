import javax.swing.*;

public class Main {
    public static void main(String[] args) {
        int amountOfPeople = 0;
        int votesForZe = 0;
        int votesForRita = 0;
        int counter = 1;
        int undefinedVote = 0;
        double calculatePercent = 0;

        JOptionPane.showMessageDialog(null,"Olá, seja bem-vindo ao VotaBem, o programa oficial\nde pesquisa eleitoral desenvolvido pela\ncomunidade.");

        String amountStr = JOptionPane.showInputDialog(null, "Qual será a quantidade de pessoas entrevistadas?");
        amountOfPeople = Integer.parseInt(amountStr);

        while(counter <= amountOfPeople){
            String optionVoted = JOptionPane.showInputDialog(null, "Qual candidato você deseja votar?\n 1 - Zé da Farmácia\n 2 - Rita da Padaria");
            switch(optionVoted) {
                case "1":
                    votesForZe += 1;
                    break;
                case "2":
                    votesForRita += 1;
                    break;
                default:
                    undefinedVote += 1;
                    break;
            }
            counter++;
        }
        double totalForZe = (100 / amountOfPeople) * votesForZe;
        double totalForRita = (100 / amountOfPeople) * votesForRita;

        JOptionPane.showMessageDialog(null, "Zé da Farmácia recebeu "+votesForZe+" votos,\nque corresponde a "+totalForZe+"% dos votos válidos.");
        JOptionPane.showMessageDialog(null, "Rita da Padaria recebeu "+votesForRita+" votos,\nque corresponde a "+totalForRita+"% dos votos válidos.");
        JOptionPane.showMessageDialog(null, "Não votaram, não sabiam ou anularam:" + undefinedVote+" votos");
        
    }
}