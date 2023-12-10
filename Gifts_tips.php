<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentgatan Gift Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #ffffff;
            color: #333333;
            line-height: 1.6;
        }

        .section-gift-shop {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: #f8f8f8;
        }

        .content-wrapper {
            max-width: 1200px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .image-section {
            flex: 1;
        }

        .image-section img {
            max-width: 100%;
            height:  600px;
            border-radius: 8px;
        }

        .text-section {
            flex: 1;
            padding: 0 20px;
        }

        .text-section h2 {
            color: hsl(5, 100%, 69%);
            margin-bottom: 20px;
            text-align: center;
        }

        .text-section p {
            margin-bottom: 15px;
        }

        .button {
            color: hsl(5, 100%, 69%);
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            position: relative;
            left: 270px;
            bottom: 40px;
        }

        .button1{
            color: hsl(5, 100%, 69%);
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .content-wrapper {
                flex-direction: column;
            }

            .button {
                left: auto;
                bottom: auto;
            }
        }
    </style>
</head>
<body>
    <section class="section-gift-shop">
        <div class="content-wrapper">
            <div class="image-section">
                <img src="https://images.pexels.com/photos/264787/pexels-photo-264787.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Presentgatan Street Scene">
            </div>
            <div class="text-section">
                <h2>Välkommen till Presentgatan.se - din guide till perfekta presenter!</h2>
                <p>Letar du efter den ultimata gåvan som kommer att skapa minnen för livet? Då har du kommit rätt! 
                    <strong>På Presentgatan.se gör vi presentjakten till en enkel och njutbar upplevelse. Vi förstår att varje gåva är en möjlighet att uttrycka kärlek, uppskattning och omtanke,</strong> och vi är här för att hjälpa dig hitta den idealiska presenten för varje tillfälle....</p>
                <p>Vad gör Presentgatan.se unikt? Vi har samlat de bästa presentidéerna från olika kategorier och prisnivåer för att passa alla smaker och plånböcker. Vår plattform är en skattkarta fylld med överraskningar, från personliga gåvor och trendiga prylar till tidlösa klassiker. Med våra noggrant kuraterade listor och guider blir det enkelt för dig att navigera genom den ibland överväldigande världen av presenter.</p>
                <p>Hos oss handlar det inte bara om att hitta en gåva; det handlar om att skapa ögonblick av glädje och överraskning. Genom att erbjuda dig de senaste trenderna och tidlösa favoriterna strävar vi efter att göra din presentupplevelse så smidig och minnesvärd som möjligt.</p>
                <p>Så, låt Presentgatan.se vara din guide när du ger kärlek och glädje i form av presenter. Oavsett om det är en födelsedag, jubileum, bröllop eller bara en spontan gest av kärlek, finns vi här för att hjälpa dig göra varje ögonblick extra speciellt. Upptäck vårt sortiment idag och låt oss tillsammans skapa oförglömliga stunder genom de perfekta presenterna!</p>
                    
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>
