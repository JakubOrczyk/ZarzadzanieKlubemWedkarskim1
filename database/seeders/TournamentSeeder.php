<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Tournament;

class TournamentSeeder extends Seeder
{
    public function run(): void
    {

        Schema::withoutForeignKeyConstraints(function () {
            Tournament::truncate();
        });

        Tournament::insert([
            [
                'name' => 'Puchar burmistrza',
                'description' => '27 lipca 2024<br />
                Zapraszamy na niezwykły turniej wędkarski, który organizowany jest pod honorowym patronatem samego burmistrza! To wyjątkowe wydarzenie, które nie tylko pozwoli Ci sprawdzić swoje umiejętności w wędkowaniu, ale także spotkać się z lokalną społecznością w atmosferze pikniku rodzinno-wędkarskiego. Dołącz do naszego turnieju nad pięknym jeziorem i uczestnicz w rywalizacji o Puchar burmistrza oraz wiele innych atrakcyjnych nagród!
                <br /><br />
                07:00 - 08:00: Rejestracja uczestników<br />
                08:00 - 08:30: Otwarcie zawodów i odprawa techniczna<br />
                08:30 - 12:00: Pierwsza tura zawodów<br />
                12:00 - 13:00: Przerwa na obiad<br />
                13:00 - 16:30: Druga tura zawodów<br />
                16:30 - 17:00: Zliczanie wyników i podsumowanie<br />
                17:00 - 18:00: Wręczenie nagród i zakończenie zawodów<br /><br />
                <br />
                Zawody będą rozgrywane w dwóch kategoriach:
                <br /><br />
                Seniorzy (18+ lat)<br />
                Juniorzy (do 18 lat)<br /><br />
                Dla zwycięzców w każdej kategorii przewidziane są atrakcyjne nagrody:<br /><br />

                I miejsce: Zestaw profesjonalnych wędek, puchar i medal<br />
                II miejsce: Wysokiej jakości sprzęt wędkarski, medal<br />
                III miejsce: Akcesoria wędkarskie, medal<br /><br />
                Zasady:<br />
                <br />
                Zawody odbywają się zgodnie z regulaminem Polskiego Związku Wędkarskiego.<br />
                Każdy uczestnik musi posiadać ważną licencję wędkarską.<br />
                Dozwolone są tylko wędki spławikowe i gruntowe.<br />
                Wszyscy uczestnicy muszą przestrzegać zasad ochrony środowiska.<br />
                <br /><br />
                Aby wziąć udział w zawodach, prosimy o wcześniejszą rejestrację. Zapisy osobiście w siedzibie klubu do dnia 10 czerwca 2024.
                <br /><br />
                <br />
                W razie pytań prosimy o kontakt:
                <br />
                Telefon: 123-456-789<br />
                E-mail: kontakt@klubwedkarski.pl<br /><br />
                Nie przegapcie okazji do sprawdzenia swoich umiejętności wędkarskich, poznania nowych ludzi i wygrania wspaniałych nagród!<br /><br /> Do zobaczenia nad wodą!<br />
                ',
                'lake_id' => 1,
            ],
            [
                'name' => 'Wielki Turniej Wędkarski 2024',
                'description' => '15 czerwca 2024<br />
                <br />
                Opis Wydarzenia:<br /><br />
                Zapraszamy wszystkich miłośników wędkarstwa na coroczny Wielki Turniej Wędkarski 2024! <br />To wyjątkowe wydarzenie, które przyciąga entuzjastów wędkarstwa z całego regionu, odbędzie się nad malowniczym jeziorem Łowisko. Jest to doskonała okazja do rywalizacji, wymiany doświadczeń i spędzenia czasu na świeżym powietrzu w towarzystwie innych pasjonatów.

                <br /><br />
                07:00 - 08:00: Rejestracja uczestników<br />
                08:00 - 08:30: Otwarcie zawodów i odprawa techniczna<br />
                08:30 - 12:00: Pierwsza tura zawodów<br />
                12:00 - 13:00: Przerwa na obiad<br />
                13:00 - 16:30: Druga tura zawodów<br />
                16:30 - 17:00: Zliczanie wyników i podsumowanie<br />
                17:00 - 18:00: Wręczenie nagród i zakończenie zawodów<br /><br />
                <br />
                Zawody będą rozgrywane w dwóch kategoriach:
                <br /><br />
                Seniorzy (18+ lat)<br />
                Juniorzy (do 18 lat)<br /><br />
                Dla zwycięzców w każdej kategorii przewidziane są atrakcyjne nagrody:<br /><br />

                I miejsce: Zestaw profesjonalnych wędek, puchar i medal<br />
                II miejsce: Wysokiej jakości sprzęt wędkarski, medal<br />
                III miejsce: Akcesoria wędkarskie, medal<br /><br />
                Zasady:<br />
                <br />
                Zawody odbywają się zgodnie z regulaminem Polskiego Związku Wędkarskiego.<br />
                Każdy uczestnik musi posiadać ważną licencję wędkarską.<br />
                Dozwolone są tylko wędki spławikowe i gruntowe.<br />
                Wszyscy uczestnicy muszą przestrzegać zasad ochrony środowiska.<br />
                <br /><br />
                Aby wziąć udział w zawodach, prosimy o wcześniejszą rejestrację. Zapisy osobiście w siedzibie klubu do dnia 10 czerwca 2024.
                <br /><br />
                <br />
                W razie pytań prosimy o kontakt:
                <br />
                Telefon: 123-456-789<br />
                E-mail: kontakt@klubwedkarski.pl<br /><br />
                Nie przegapcie okazji do sprawdzenia swoich umiejętności wędkarskich, poznania nowych ludzi i wygrania wspaniałych nagród!<br /><br /> Do zobaczenia nad wodą!<br />',
                'lake_id' => 2,

            ],
            [
                'name' => 'Turniej Wędkarski "Rybia Pasja 2024"',
                'description' => 'Data: 15 czerwca 2024<br />
                <br />
                <br />
                Zapraszamy wszystkich miłośników wędkarstwa na niezwykłe wydarzenie - coroczny Turniej Wędkarski "Rybia Pasja 2024"! To święto dla entuzjastów tego pięknego sportu, które odbędzie się nad urokliwym jeziorem Moczydło, otocznym malowniczymi lasami i ciszą natury.<br />
                <br />
                Plan Dnia:<br />
                <br />
                07:00 - 08:00: Rejestracja uczestników<br />
                08:00 - 08:30: Uroczyste rozpoczęcie i odprawa techniczna<br />
                08:30 - 12:00: Pierwsza faza rywalizacji<br />
                12:00 - 13:00: Przerwa na wspólny posiłek<br />
                13:00 - 16:30: Druga tura zaciętej rywalizacji<br />
                16:30 - 17:00: Podsumowanie wyników i emocjonujące momenty<br />
                17:00 - 18:00: Wręczenie nagród i zakończenie turnieju<br />
                <br />
                W Turnieju Wędkarskim "Rybia Pasja 2024" rywalizować będą zawodnicy w dwóch kategoriach:<br />
                <br />
                Kategoria "Mistrzowska" (18+)<br />
                Kategoria "Młode Talenty" (do 18 lat)<br />
                Dla zwycięzców w każdej kategorii przewidziane są atrakcyjne nagrody:<br />
                <br />
                I miejsce: Wyjątkowy zestaw wędkarski, puchar i medale<br />
                II miejsce: Doskonały sprzęt wędkarski, medale<br />
                III miejsce: Niezbędne akcesoria wędkarskie, medale<br />
                <br />
                Rywalizacja odbywa się zgodnie z regulaminem Polskiego Związku Wędkarskiego.<br />
                Każdy uczestnik zobowiązany jest do posiadania aktualnej licencji wędkarskiej.<br />
                Wszystkie techniki połowu są dozwolone, z wyjątkiem sieci.<br />
                Szanujemy naturę! Wszyscy uczestnicy zobowiązani są do przestrzegania zasad ochrony środowiska.<br />
                <br />
                Aby wziąć udział w Turnieju Wędkarskim "Rybia Pasja 2024", zapraszamy do wcześniejszej rejestracji. Zapisy prowadzone są osobiście w siedzibie naszego klubu wędkarskiego do dnia 10 czerwca 2024.<br />
                <br />
                <br />
                W razie jakichkolwiek pytań lub wątpliwości, prosimy o kontakt:<br />
                <br />
                Telefon: 123-456-789<br />
                E-mail: kontakt@klubwedkarski.pl<br />
                <br />
                Nie przegap tej niepowtarzalnej okazji do sprawdzenia swoich umiejętności, poznania nowych przyjaciół i wspaniałej zabawy nad brzegiem jeziora Moczydło!<br /> Do zobaczenia nad wodą!<br />',
                'lake_id' => 3,

            ],
        ]);
    }
}
