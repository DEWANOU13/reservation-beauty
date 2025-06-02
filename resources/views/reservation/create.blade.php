<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réserver un soin | Line Nail's</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #ffe4ec 0%, #e0c3fc 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }
        .form-container {
            background: rgba(255,255,255,0.95);
            max-width: 500px;
            margin: 60px auto 30px auto;
            padding: 40px 30px 30px 30px;
            border-radius: 24px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.10);
            position: relative;
            z-index: 2;
        }
        h1 {
            color: #d946ef;
            text-align: center;
            margin-bottom: 28px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        label {
            color: #a21caf;
            font-weight: 600;
        }
        .btn-primary {
            background: linear-gradient(90deg, #a21caf 0%, #ec4899 100%);
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 30px;
            transition: all 0.3s;
            font-weight: 600;
            letter-spacing: 1px;
        }
        .btn-primary:hover {
            background: linear-gradient(90deg, #ec4899 0%, #a21caf 100%);
            transform: scale(1.04);
        }
        .alert {
            border-radius: 12px;
        }
        .form-control:focus {
            border-color: #ec4899;
            box-shadow: 0 0 0 0.2rem rgba(236,72,153,.15);
        }
        .floating-bg {
            position: fixed;
            top: 0; left: 0; width: 100vw; height: 100vh;
            z-index: 0;
            pointer-events: none;
            background: url("{{ asset('images/pexels-cottonbro-5874874.jpg') }}") center/cover no-repeat;
            opacity: 0.08;
            filter: blur(2px);
        }
        @media (max-width: 600px) {
            .form-container { padding: 24px 8px 18px 8px; }
            h1 { font-size: 1.5rem; }
        }
    </style>
</head>
<body>
    <div class="floating-bg"></div>
    <header class="bg-white shadow-sm sticky-top" style="z-index:3;">
        <div class="container d-flex justify-content-between align-items-center py-3">
            <img src="{{ asset('images/logojacqueline.png') }}" alt="Line Nail's Logo" style="height:48px;">
            <a href="{{ url('/') }}" class="text-pink-500 fw-semibold text-decoration-none">← Retour à l'accueil</a>
        </div>
    </header>

    <div class="form-container shadow-lg">
        <h1>
            <svg width="32" height="32" fill="none" stroke="#ec4899" stroke-width="2" class="me-2 mb-1" viewBox="0 0 24 24"><path d="M12 21C12 21 4 13.5 4 8.5C4 5.5 6.5 3 9.5 3C11.04 3 12.5 4 13 5.09C13.5 4 14.96 3 16.5 3C19.5 3 22 5.5 22 8.5C22 13.5 12 21 12 21Z"></path></svg>
           Reservation de soin 
        </h1>

        @if(session('success'))
            <div class="alert alert-success text-center mb-3">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mb-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('reservation.store') }}" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="client_name" class="form-label">Votre nom</label>
                <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name') }}" placeholder="Entrez votre nom" required>
                <div class="invalid-feedback">Ce champ est obligatoire</div>
            </div>

            <div class="mb-3">
                <label for="client_email" class="form-label">Votre email</label>
                <input type="email" class="form-control" id="client_email" name="client_email" value="{{ old('client_email') }}" placeholder="Entrez votre email" required>
                <div class="invalid-feedback">Ce champ est obligatoire</div>
            </div>

            <div class="mb-3">
                <label for="client_phone" class="form-label">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="client_phone" name="client_phone"
                       value="{{ old('client_phone') }}"
                       placeholder="Entrez votre numéro de téléphone" required>
                <div class="invalid-feedback">Ce champ est obligatoire</div>
            </div>

            <div class="mb-3">
                <label for="service_id" class="form-label">Service</label>
                <select name="service_id" id="service_id" class="form-select" required>
                    <option value="">-- Choisissez un service --</option>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>
                            {{ $service->name }} 
                        </option>
                    @endforeach
                </select>
                <div class="invalid-feedback">Ce champ est obligatoire</div>
            </div>

            <div class="mb-3">
                <label for="nail_length" class="form-label">Longueur des ongles</label>
                <select name="nail_length" id="nail_length" class="form-select" required>
                    <option value="">-- Choisissez la longueur --</option>
                    <option value="long" {{ old('nail_length') == 'long' ? 'selected' : '' }}>Longues</option>
                    <option value="medium" {{ old('nail_length') == 'medium' ? 'selected' : '' }}>Moyennes</option>
                    <option value="short" {{ old('nail_length') == 'short' ? 'selected' : '' }}>Courtes</option>
                </select>
                <div class="invalid-feedback">Ce champ est obligatoire</div>
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" id="date" name="date" class="form-control" placeholder="Choisissez une date" required autocomplete="off">
                <div class="invalid-feedback">Ce champ est obligatoire</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Heure</label>
                <div id="hour-picker" class="d-flex flex-wrap gap-2"></div>
                <input type="hidden" name="hour" id="hour" required>
                <div id="hour-warning" class="text-danger small mt-1" style="display:none;"></div>
            </div>

            <div class="mb-3">
                <label for="options" class="form-label">Options supplémentaires</label>
                <select name="options" id="options" class="form-select">
                    <option value="">Aucune</option>
                    <option value="nail_art_simple" {{ old('options') == 'nail_art_simple' ? 'selected' : '' }}>Nail Art simple (+25 min)</option>
                    <option value="nail_art_extra" {{ old('options') == 'nail_art_extra' ? 'selected' : '' }}>Nail Art extra (+40 min)</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Méthode de paiement</label>
                <select name="payment_method" id="payment_method" class="form-select" required>
                    <option value="">-- Choisissez une méthode --</option>
                    <option value="cash" {{ old('payment_method') == 'cash' ? 'selected' : '' }}>Espèces</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prix estimé ($)</label>
                <input type="text" class="form-control" id="price" name="price" readonly>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary w-100 shadow-sm">Réserver</button>
            </div>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Réservation confirmée</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 text-success fw-bold">
                        Votre réservation a été enregistrée avec succès !
                    </div>
                    @if(session('reservation_details'))
                        @php $d = session('reservation_details'); @endphp
                        <ul class="list-group mb-2">
                            <li class="list-group-item"><strong>Nom :</strong> {{ $d['client_name'] }}</li>
                            <li class="list-group-item"><strong>Email :</strong> {{ $d['client_email'] }}</li>
                            <li class="list-group-item"><strong>Téléphone :</strong> {{ $d['client_phone'] }}</li>
                            <li class="list-group-item"><strong>Service :</strong> {{ $d['service'] }}</li>
                            <li class="list-group-item"><strong>Date & heure :</strong> {{ \Carbon\Carbon::parse($d['reserved_at'])->format('d/m/Y H:i') }}</li>
                            <li class="list-group-item"><strong>Longueur :</strong> {{ ucfirst($d['nail_length']) }}</li>
                            <li class="list-group-item"><strong>Options :</strong> {{ $d['options'] }}</li>
                            <li class="list-group-item"><strong>Prix :</strong> {{ number_format($d['price'], 2) }} $</li>
                            <li class="list-group-item"><strong>Paiement :</strong> {{ $d['payment_method'] == 'cash' ? 'Espèces' : 'Carte' }}</li>
                        </ul>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white py-4 text-center text-sm text-gray-500" style="z-index:2;position:relative;">
        &copy; {{ date('Y') }} Line nail's. Tous droits réservés.
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('success'))
                var modal = new bootstrap.Modal(document.getElementById('successModal'));
                modal.show();
            @endif
        });
    </script>
    <script>
        // Structure des prix (à adapter selon ta base)
        const prices = {
            @foreach($services as $service)
                {{ $service->id }}: {
                    long: {{ $service->price_long ?? 0 }},
                    medium: {{ $service->price_medium ?? 0 }},
                    short: {{ $service->price_short ?? 0 }}
                },
            @endforeach
        };
        const optionsSupp = {
            nail_art_simple: 5,
            nail_art_extra: 15
        };
        function updatePrice() {
            const serviceId = document.getElementById('service_id').value;
            const nailLength = document.getElementById('nail_length').value;
            const option = document.getElementById('options').value;
            let price = 0;
            if (prices[serviceId] && prices[serviceId][nailLength]) {
                price = prices[serviceId][nailLength];
            }
            if (optionsSupp[option]) {
                price += optionsSupp[option];
            }
            document.getElementById('price').value = price > 0 ? price + ' $' : '';
        }
        document.getElementById('service_id').addEventListener('change', updatePrice);
        document.getElementById('nail_length').addEventListener('change', updatePrice);
        document.getElementById('options').addEventListener('change', updatePrice);
        document.addEventListener('DOMContentLoaded', updatePrice);
    </script>
    <script>
const hourPicker = document.getElementById('hour-picker');
const hourInput = document.getElementById('hour');
const hourWarning = document.getElementById('hour-warning');

// Horaires d'ouverture
const hours = {
    0: ['12:00', '13:00', '14:00', '15:00', '16:00'], // Dimanche
    1: ['08:00', '09:00', '10:00', '11:00', '12:00'], // Lundi
    2: ['08:00', '09:00', '10:00', '11:00', '12:00'], // Mardi
    3: ['08:00', '09:00', '10:00', '11:00', '12:00'], // Mercredi
    4: ['08:00', '09:00', '10:00', '11:00', '12:00'], // Jeudi
    5: ['08:00', '09:00', '10:00', '11:00', '12:00'], // Vendredi
    6: ['08:00', '09:00', '10:00', '11:00', '12:00'], // Samedi
};

// Désactive les dates passées
flatpickr("#date", {
    minDate: "today",
    inline: true,
    dateFormat: "Y-m-d",
    locale: "fr",
    onChange: function(selectedDates, dateStr, instance) {
        renderHourButtons(selectedDates[0]);
    }
});

function renderHourButtons(date) {
    hourPicker.innerHTML = '';
    hourInput.value = '';
    hourWarning.style.display = 'none';
    if (!date) return;
    const day = date.getDay();
    const available = hours[day] || [];
    if (available.length === 0) {
        hourWarning.style.display = 'block';
        hourWarning.textContent = "Aucune heure disponible ce jour.";
        return;
    }
    available.forEach(h => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'btn btn-outline-primary';
        btn.textContent = h;
        btn.onclick = () => {
            document.querySelectorAll('#hour-picker button').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            hourInput.value = h;
        };
        hourPicker.appendChild(btn);
    });
}
</script>
<script>
    // Bootstrap validation
    (() => {
        'use strict'
        const forms = document.querySelectorAll('.needs-validation')
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
</body>
</html>
