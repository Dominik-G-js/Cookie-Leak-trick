# Cookie Leak Prank - Vzdělávací Demonstrace

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

## Autor

Vytvořil **D.G.**

  * **LinkedIn:** [Dominik G.](https://www.linkedin.com/in/dominik-g-9aab2b225/)

## Licence

Tento projekt je licencován pod [MIT licencí](https://www.google.com/search?q=LICENSE).
