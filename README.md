Jasně, tady je návrh profesionálního `README.md` souboru pro váš GitHub projekt. Je napsaný tak, aby jasně vysvětlil účel projektu, ukázal jeho funkce a zároveň obsahoval důležité upozornění, že se jedná o vzdělávací nástroj.

Stačí zkopírovat celý text níže a vložit ho do souboru s názvem `README.md` ve vašem GitHub repozitáři.

-----

# Cookie Leak Prank - Vzdělávací Demonstrace

Tento projekt je interaktivní a vzdělávací webová stránka, která zábavnou formou demonstruje principy zranitelnosti Cross-Site Scripting (XSS) a ukazuje, jaké informace může webová stránka zjistit o svých návštěvnících. Stránka je nastylována jako "hackerský" terminál pro posílení vizuálního dojmu.

## 🚀 Live Demo

**[Spustit Demonstraci Zde](https://dominik-g-js.github.io/Cookie-Leak-trick/)**

## Klíčové Funkce

  * **Interaktivní "hackerský" terminál:** Uživatelské rozhraní stylizované do podoby starých terminálů pro zábavný a poutavý zážitek.
  * **Detekce informací o návštěvníkovi:** Stránka automaticky detekuje a zobrazí technické údaje o návštěvníkovi, jako jsou:
      * Veřejná IP adresa
      * User-Agent (prohlížeč, operační systém)
      * Rozlišení obrazovky
      * Jazyk prohlížeče
      * Časové pásmo
  * **Simulace krádeže cookie:** Po interakci uživatele (odeslání textu) stránka simuluje zachycení a zalogování session cookie.
  * **Personalizace pomocí URL:** Projekt umožňuje personalizovat "útok" přidáním jména do URL adresy, což je ideální pro "hackerský" vtípek na přátele.

## Jak to Funguje

Aplikace je postavena na čistém HTML, CSS a JavaScriptu.

  * Vzhled je vytvořen pomocí CSS, včetně animací pro "hackerský" efekt.
  * Informace o uživateli jsou sbírány standardními webovými API:
      * `navigator.userAgent`, `screen.width`, `navigator.language` atd.
      * Veřejná IP adresa je získána pomocí `fetch` dotazu na externí službu `api.ipify.org`, což simuluje pohled ze strany serveru.
  * Funkce personalizace využívá `URLSearchParams` k přečtení parametrů (např. jména) přímo z URL adresy.

## Jak Použít pro Prank

Chcete si udělat legraci z kamaráda a ukázat mu, jak ho "hackujete"?

1.  Zkopírujte odkaz na live demo: `https://dominik-g-js.github.io/Cookie-Leak-trick/`
2.  Na konec odkazu přidejte `?jmeno=JMENO_KAMARADA`. Nahraďte `JMENO_KAMARADA` skutečným jménem.
3.  Pošlete upravený odkaz kamarádovi.

**Příklad:**
Pro kamaráda jménem **Pavel** bude finální odkaz vypadat takto:

```
https://dominik-g-js.github.io/Cookie-Leak-trick/?jmeno=Pavel
```

Když Pavel stránku otevře, v terminálu se zobrazí jeho jméno, jako by bylo právě získáno z jeho systému.

## Důležité Upozornění

Tento projekt byl vytvořen **čistě pro vzdělávací a demonstrativní účely**.

  * **Nejedná se o skutečný hackerský nástroj** a neprovádí žádné reálné útoky ani neukládá žádná data.
  * Všechny zobrazené "ukradené" údaje jsou buď testovací (cookie), běžně dostupné technické informace, nebo informace předané přímo v URL.
  * Cílem projektu je zvýšit povědomí o webové bezpečnosti a ochraně soukromí.

## Autor

Vytvořil **D.G.**

  * **LinkedIn:** [Dominik G.](https://www.linkedin.com/in/dominik-g-9aab2b225/)

## Licence

Tento projekt je licencován pod [MIT licencí](https://www.google.com/search?q=LICENSE).
