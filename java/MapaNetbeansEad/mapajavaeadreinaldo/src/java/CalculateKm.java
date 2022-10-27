/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author desenvolvedor
 */
public class CalculateKm extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        
        // Vars 
        String name_car;
        Double price_gas, km_per_liter, revision_10mkm, price_pneus, cost_per_revision, cost_per_pneus, cost_per_km, total_costs, total_costs_percent;
        
        // Get Parameters
        name_car = request.getParameter("model_car");
        price_gas = Double.valueOf(request.getParameter("price_gas"));
        km_per_liter = Double.valueOf(request.getParameter("km_l"));
        revision_10mkm = Double.valueOf(request.getParameter("revision_10mkm"));
        price_pneus = Double.valueOf(request.getParameter("price_pneus"));
        
        // Processing
        cost_per_revision = revision_10mkm / 10000;
        cost_per_pneus = price_pneus / 50000;
        cost_per_km = price_gas / km_per_liter;        

        total_costs = cost_per_revision + cost_per_pneus + cost_per_km;
        total_costs_percent = total_costs + (0.15);
        
        response.setContentType("text/html;charset=UTF-8");
        try ( PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */    
                out.println("<!DOCTYPE html>");
                out.println("<html>");
                out.println("<head>");
                out.println("<title>Cáculo KM Rodado - RA 21027928-5</title>");   
                out.println("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>");
                out.println("<link href='./default.css' rel='stylesheet' type='text/css' />");
                out.println("</head>");
                out.println("<body>");
                out.println("<div class='container-fluid bg-dark p-2' style='height:100vh;'>");
                out.println("<div class='container p-5'>");
                out.println("<div class='d-flex flex-column mb-3'>");
                out.println("<h1 class='h3 text-center text-uppercase fw-bold text-green-neon mb-3'>RESULTADO DO KM RODADO PARA "+name_car+"</h1>");
                out.println("<div class='mt-5 p-4 w-75 bg-dark-view' style='margin:0 auto;'>");
                out.println("<div class='row'>");

                out.println("<div class='col-6'>");
                out.println("<div class='text-left p-4 rounded'>");
                out.println(""
                        + "<h6 class='fw-bold lead mb-4 text-fancy'>Dados informados:</h6>"
                        + "<p class='mb-0 text-white'><strong>Veículo:</strong> " + name_car + "</p>"
                        + "<p class='mb-0 text-white'><strong>R$/L gasolina:</strong> R$ " + price_gas + "</p>"
                        + "<p class='mb-0 text-white'><strong>Média KM/L:</strong> " + km_per_liter + "</p>"
                        + "<p class='mb-0 text-white'><strong>Média revisão 10k km:</strong> R$ " + revision_10mkm + "</p>"
                        + "<p class='mb-0 text-white'><strong>R$ Kit Pneus:</strong> R$ " + price_pneus + "</p>"
                  );
                out.println("</div>");
                out.println("</div>");

                out.println("<div class='col-6'>");
                out.println("<div class='text-left bg-dark p-4 rounded'>");
                out.println(""
                        + "<p class='text-center lead text-fancy mb-1'>Seu veículo gasta (R$ por KM):</p>"
                        + "<h5 class='text-center fw-bold text-light'>R$ " + total_costs + "</h5>"
                        + "<p class='mt-3 text-white text-center lead-small mb-2'>Custo total com acréscimo de 15%</p>"
                        + "<h2 class='h2 text-center fw-bold text-green-neon'><strong>R$ " + total_costs_percent + "</strong></h2>"
                  );
                out.println("</div>");
                out.println("</div>");

                out.println("<a href='./' class='btn btn-lg btn-send-neon w-50 mt-5 mb-3 px-5 py-2' style='margin:0 auto'>Refazer cálculo</a>");

                out.println("</div>");
                out.println("</div>");
                out.println("</div>");
                out.println("</div>");
                out.println("</body>");
                out.println("</html>");
            }
        }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
