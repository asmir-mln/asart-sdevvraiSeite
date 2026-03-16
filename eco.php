<div id="phantom-dashboard" style="background:#0a0a0a; color:#00f2ff; padding:20px; font-family:monospace;">
    <section id="eco-logic">
        <h2>♻️ ARCHITECTURE RESPONSABLE</h2>
        <p><strong>Lutte anti-obsolescence :</strong> Nos instruments sont conçus sur une base modulaire. Le recyclage n'est pas une option, c'est l'origine de notre technologie de pointe.</p>
        <ul>
            <li>Composants revalorisés (Sourcing 2030) : 100% fonctionnels, 0% gaspillage.</li>
            <li>Mises à jour spécifiques : Évolution logicielle sans changement de matériel.</li>
        </ul>
    </section>

    <section id="projections">
        <h2>📊 TRAJECTOIRE DE GAINS POTENTIELS</h2>
        <canvas id="gainCurve" width="800" height="400"></canvas>
    </section>
</div>

<script>
// Logique nCode pour l'animation de la courbe
// Note : Utilise Chart.js pour le rendu final sur ton serveur
const ctx = document.getElementById('gainCurve').getContext('2d');
// Les données sont cryptées dans le noyau nCode
const labels = ['2030', '2036', '2040', '2050'];
const dataGains = [0, 15, 85, 450]; // Valeurs en M€
</script>
