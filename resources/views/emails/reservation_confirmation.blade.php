{{-- filepath: resources/views/emails/reservation_confirmation.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation de réservation - Line Nail's</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #ffe4ec 0%, #e0c3fc 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .mail-container {
            max-width: 480px;
            margin: 40px auto;
            background: #fff;
            border-radius: 22px;
            box-shadow: 0 8px 32px 0 rgba(172, 85, 197, 0.13);
            padding: 38px 28px 28px 28px;
        }
        .brand {
            color: #ec4899;
            font-family: 'Pacifico', cursive, sans-serif;
            font-size: 2rem;
            letter-spacing: 2px;
            margin-bottom: 8px;
            display: inline-block;
        }
        .checkmark {
            display: block;
            margin: 0 auto 18px auto;
            width: 48px;
            height: 48px;
        }
        h2 {
            color: #a21caf;
            margin-bottom: 12px;
            font-size: 1.25rem;
            text-align: center;
        }
        .success-msg {
            color: #10b981;
            font-weight: 600;
            text-align: center;
            margin-bottom: 18px;
            font-size: 1.05rem;
        }
        ul {
            padding-left: 0;
            list-style: none;
            margin-bottom: 22px;
        }
        li {
            margin-bottom: 10px;
            color: #6d28d9;
            font-size: 1rem;
        }
        strong {
            color: #a21caf;
        }
        .footer {
            margin-top: 28px;
            font-size: 0.97rem;
            color: #6b7280;
            border-top: 1px solid #f3e8ff;
            padding-top: 18px;
            text-align: center;
        }
        .contact {
            margin-top: 10px;
            color: #7c3aed;
            font-size: 0.98rem;
        }
        @media (max-width: 600px) {
            .mail-container { padding: 18px 4vw 16px 4vw; }
            h2 { font-size: 1.1rem; }
            .brand { font-size: 1.3rem; }
        }
    </style>
</head>
<body>
    <div class="mail-container">
        <div style="text-align:center;">
            <span class="brand">Line Nail's</span>
        </div>
        <svg class="checkmark" fill="none" stroke="#10b981" stroke-width="2.5" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="11" stroke="#e0c3fc" stroke-width="2.5" fill="#f3e8ff"/>
            <path d="M7 13l3 3 7-7" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        @if ($isAdmin)
            <h2>Bonjour Monsieur Eric,</h2>
            <div class="success-msg">Un client a effectué une réservation.</div>
            <p style="text-align:center;margin-bottom:18px;">Voici les détails :</p>
        @else
            <h2>Bonjour {{ $details['client_name'] }},</h2>
            <div class="success-msg">Votre réservation a bien été enregistrée ! 🎉</div>
            <p style="text-align:center;margin-bottom:18px;">
                Merci pour votre confiance.<br>
                Voici le récapitulatif de votre rendez-vous :
            </p>
        @endif

        <ul>
            <li><strong>Service :</strong> {{ $details['service'] }}</li>
            <li><strong>Date et heure :</strong> {{ \Carbon\Carbon::parse($details['reserved_at'])->format('d/m/Y H:i') }}</li>
            <li><strong>Longueur des ongles :</strong> {{ ucfirst($details['nail_length']) }}</li>
            @if(!empty($details['options']))
                <li><strong>Options :</strong> {{ $details['options'] }}</li>
            @endif
            <li><strong>Montant total :</strong> {{ number_format($details['price'], 2) }} €</li>
        </ul>

        @if (!$isAdmin)
            <p style="text-align:center;margin-bottom:0;">
                Nous avons hâte de vous accueillir dans notre institut.<br>
                Un rappel vous sera envoyé avant votre rendez-vous.
            </p>
        @endif

        <div class="footer">
            <div class="contact">
                📞 514 608 9194 <br>
                📧 jacquelinetoudonou@gmail.com <br>
                📍 3344 RUE FOUCHER TROIS RIVIÈRES, G8Z1M3, QUÉBEC, CANADA
            </div>
            <p style="margin-top:10px;">&copy; {{ date('Y') }} Line Nail's. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>

