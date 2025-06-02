{{-- filepath: resources/views/emails/reservation_confirmation.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation de réservation - Line Nail's</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <style>
        body {
            background: #f6f6f6;
            font-family: 'Segoe UI', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .mail-container {
            max-width: 420px;
            margin: 40px auto;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px 0 rgba(80, 60, 120, 0.10);
            padding: 32px 20px 24px 20px;
            border: 1px solid #ececec;
        }
        .brand {
            color: #a21caf;
            font-family: 'Pacifico', cursive, sans-serif;
            font-size: 1.7rem;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: inline-block;
        }
        .checkmark {
            display: block;
            margin: 0 auto 18px auto;
            width: 44px;
            height: 44px;
        }
        h2 {
            color: #3b0764;
            margin-bottom: 10px;
            font-size: 1.15rem;
            text-align: center;
            font-weight: 600;
        }
        .success-msg {
            color: #15803d;
            font-weight: 600;
            text-align: center;
            margin-bottom: 16px;
            font-size: 1.01rem;
        }
        ul {
            padding-left: 0;
            list-style: none;
            margin-bottom: 18px;
        }
        li {
            margin-bottom: 8px;
            color: #444;
            font-size: 0.98rem;
        }
        strong {
            color: #7c3aed;
        }
        .footer {
            margin-top: 22px;
            font-size: 0.95rem;
            color: #888;
            border-top: 1px solid #ececec;
            padding-top: 14px;
            text-align: center;
        }
        .contact {
            margin-top: 8px;
            color: #6d28d9;
            font-size: 0.97rem;
        }
        @media (max-width: 600px) {
            .mail-container { padding: 12px 2vw 10px 2vw; }
            h2 { font-size: 1rem; }
            .brand { font-size: 1.1rem; }
        }
    </style>
</head>
<body>
    <div class="mail-container">
        <div style="text-align:center;">
            <span class="brand">Line Nail's</span>
        </div>
        <div style="display:flex;justify-content:center;">
            <svg class="checkmark" fill="none" stroke="#10b981" stroke-width="2.5" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="11" stroke="#e0e7ef" stroke-width="2.5" fill="#f3f4f6"/>
                <path d="M7 13l3 3 7-7" stroke="#10b981" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        @if ($isAdmin)
            <h2>Bonjour Monsieur Eric,</h2>
            <div class="success-msg">Un client a effectué une réservation.</div>
            <p style="text-align:center;margin-bottom:16px;">Voici les détails :</p>
        @else
            <h2>Bonjour {{ $details['client_name'] }},</h2>
            <div class="success-msg">Votre réservation a bien été enregistrée !</div>
            <p style="text-align:center;margin-bottom:16px;">
                Merci pour votre confiance.<br>
                Voici le récapitulatif de votre rendez-vous :
            </p>
        @endif

        <div style="background:#f9f9fb;border-radius:12px;padding:18px 12px 10px 12px;box-shadow:0 2px 8px 0 rgba(80,60,120,0.04);margin-bottom:10px;">
            <ul>
                <li><strong>Service :</strong> {{ $details['service'] }}</li>
                <li><strong>Date et heure :</strong> {{ \Carbon\Carbon::parse($details['reserved_at'])->format('d/m/Y H:i') }}</li>
                <li><strong>Longueur des ongles :</strong> {{ ucfirst($details['nail_length']) }}</li>
                @if(!empty($details['options']))
                    <li><strong>Options :</strong> {{ $details['options'] }}</li>
                @endif
                <li><strong>Montant total :</strong> {{ number_format($details['price'], 2) }} $</li>
            </ul>
        </div>

        @if (!$isAdmin)
            <p style="text-align:center;margin-bottom:0;">
                Nous avons hâte de vous accueillir dans notre institut.<br>
                Si vous avez des questions, n'hésitez pas à nous contacter.
            </p>
            
        @endif

        <div class="footer">
            <div class="contact">
                📞 514 608 9194 <br>
                📧 jacquelinetoudonou@gmail.com <br>
                📍 3344 RUE FOUCHER TROIS RIVIÈRES, G8Z1M3, QUÉBEC, CANADA
            </div>
            <p style="margin-top:8px;">&copy; {{ date('Y') }} Line Nail's. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>

