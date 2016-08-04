### Instalace a rozchození projektu
1. Po stažení projektu vytvoříme nastavení databáze pro localhost `cp src/main/resources/application-development.properties__template src/main/resources/application-development.properties` 
2. Upravíme nastavení zkopírovaného souboru pro připojení k databázi v souboru `vim src/main/resources/application-development.properties` kde vyplníte 
    1. Host, na kterém běží databázový stroj 
      `database.host=localhost`
    2. Port na kterém databáze běží
      `database.port=3306`
    3. Uživatelské jméno pro připojení k databázi
      `database.username=username`
    4. Heslo uživatele k databázi
      `database.password=password`
    5. Název databáze
      `database.db_name=rohlik`
2. Aplikaci je možné spustit více způsoby, uvádím dva nejpoužívanější:
    1. pomocí příkazu z terminálu
        `SPRING_PROFILES_ACTIVE=development,default mvn spring-boot:run`,
        kde uvedete profily, oddělené čárkou, podle toho, které `application-*.properties` chcete použít, v ukázkovém příkladu se jedná o profily `development` a `default`
    2. pomocí konfigurace IntelliJ.
        1. Zobrazte kontextové menu s vyhledávání pomocí klávesové zkratky `CMD + SHIFT + A` pro Mac OS X / macOS na Linux `CTRL + SHIFT + A` a vepište `Edit Configurations` po nalezení zmáčkněte `Enter`
        2. V nově otevřeném okně myší klikněte na `+` ikonku v levém horním rohu a vyberte `Spring Boot`
        3. Je třeba nastavit dvě věci:
            1. Hlavní spouštěcí třída (pole `Main class:`) na hodnotu `cz.rohlik.RohlikClientApiApplication`
            2. Profily pomocí proměnných prostředí (pole `Environment variables`).
                1. Pomocí levého tlačítka (tří teček `...`) otevřeme okno ve kterém přidáme řádky pomocí ikonky `+`
                    1. Hodnota sloupce Name = `SPRING_PROFILES_ACTIVE` a hodnota sloupce Value = `development,default`
        4. Dále si můžete konfiguraci pojmenovat a mít tak několik konfigurací spuštění pro více springových profilů. Což může být užitečné, pokud chcete debugovat například oproti jiné databázi. 

### Přispívání do vývoje
1. Vytvořte si vlastní fork. [Návod pro Gitlab](http://docs.gitlab.com/ee/workflow/forking_workflow.html#creating-a-fork)
2. Fork si naklonujte do složky na lokálním stroji pro vývoj `git clone ...`
3. Nastavte si projekt aby fungoval z vašeho lokálního prostředí viz. kapitola `Instalace a rozchození projektu`
4. Vytvořte si vlastní větev `git branch XXX-1234-strucny-popis-tasku`, kde místo `XXX-1234` bude vloženo číslo Issue z systému JIRA nebo jiné číslo Issue, podle systému na řízení projetu a zakládání tasků.
5. Směle vyvíjejte a snažte se nechat větev čistou z pohledu aby byl každý commit ve vaší větvi překompilovatelný a ideálně spustitelný.
6. Pravidelně pushujte commity do větve vytvořené ve vašem forku. `git push origin`
7. Následně vytvořte Pull Request, v GitLabu se to jmenuje Merge Request a může začít proces schvalování a testování.

### Dokumentace API

TODO: Sem doplnit odkaz na dokumentaci k samotnému API (rozdělit dokumentaci podle jednotlivých balíčků)

### Obsažené balíčky

TODO: Sem budeme psát jaké balíčky projekt obsahuje, s odkazy na dokumentaci

### Changelog

TODO: Sem doplnit odkaz Index soubor changelogu, který budeme psát.
