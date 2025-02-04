<?php

namespace App\Controller;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    #[Route('/create-checkout-session', name: 'create_checkout_session')]
    public function createCheckoutSession(): Response
    {
        // Configurez votre clé secrète Stripe
        Stripe::setApiKey($this->getParameter('stripe_secret_key'));
        // Créez une session de paiement
        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Nom du produit/service',
                    ],
                    'unit_amount' => 5000, // Montant en centimes (50,00 €)
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('payment_success', [], Response::HTTP_SEE_OTHER),
            'cancel_url' => $this->generateUrl('payment_cancel', [], Response::HTTP_SEE_OTHER),
        ]);

        return $this->redirect($session->url, 303);
    }

    #[Route('/payment-success', name: 'payment_success')]
    public function paymentSuccess(): Response
    {
        $this->addFlash('success', 'Paiement réussi ! Merci pour votre achat.');
        return $this->redirectToRoute('home');
    }

    #[Route('/payment-cancel', name: 'payment_cancel')]
    public function paymentCancel(): Response
    {
        $this->addFlash('error', 'Paiement annulé. Veuillez réessayer.');
        return $this->redirectToRoute('home');
    }
}
