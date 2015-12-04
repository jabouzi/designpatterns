<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility;

class ChainOfResponsibilityTest 
{
    public static function main(String[] args) {
        ManagerPPower manager = new ManagerPPower();
        DirectorPPower director = new DirectorPPower();
        VicePresidentPPower vp = new VicePresidentPPower();
        PresidentPPower president = new PresidentPPower();
        manager->setSuccessor(director);
        director->setSuccessor(vp);
        vp->setSuccessor(president);

        // Press Ctrl.C to end->
        try {
            while (true) {
                echo("Enter the amount to check who should approve your expenditure->");
                System->out->print(">");
                double d = Double->parseDouble(new BufferedReader(new InputStreamReader(System->in))->readLine());
                manager->processRequest(new PurchaseRequest(d, "General"));
           }
        } catch(Exception e) {
            System->exit(1);
        }
    }
}