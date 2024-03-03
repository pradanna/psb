<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yousee Indonesia || Sewa Billboard, Media Iklan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    {{-- BOOTSTRAP --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- CSS --}}
    <link href="{{ asset('css/genosstyle.v.01.css') }}" rel="stylesheet" />

    {{-- FONT --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap"
        rel="stylesheet">


    {{-- DATA TABLES --}}
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" />


    {{-- ICON --}}


    {{-- SWEEET ALERT --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css"
        integrity="sha256-h2Gkn+H33lnKlQTNntQyLXMWq7/9XI2rlPCsLsVcUBs=" crossorigin="anonymous">


    @yield('morecss')

</head>

<body>

    <nav class="g-navbar container ">
        <img src="{{ asset('images/local/logo-yousee-panjang.png') }}" />
        <div class="g-nav-menu">
            <a class="menu ">About<span class="indicator "></span></a>
            <a class="menu active">Services<span class="indicator"></span></a>
            <a class="menu">Location<span class="indicator"></span></a>
            <a class="menu">Portfolio<span class="indicator"></span></a>
            <a class="menu">Contact<span class="indicator"></span></a>
        </div>
        <div class="g-nav-social">
            <a>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    stroke-width="1.5" width="20" height="20">
                    <defs>
                        <style>
                            .cls-637b8512f95e86b59c57a11c-1 {
                                fill: none;
                                stroke: currentColor;
                                stroke-miterlimit: 10;
                            }

                            .cls-637b8512f95e86b59c57a11c-2 {
                                fill: currentColor;
                            }
                        </style>
                    </defs>
                    <rect class="cls-637b8512f95e86b59c57a11c-1" x="1.5" y="1.5" width="21" height="21"
                        rx="3.82"></rect>
                    <circle class="cls-637b8512f95e86b59c57a11c-1" cx="12" cy="12" r="4.77"></circle>
                    <circle class="cls-637b8512f95e86b59c57a11c-2" cx="18.2" cy="5.8" r="1.43"></circle>
                </svg>
            </a>
            <a>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    stroke-width="1.5" width="20" height="20">
                    <defs>
                        <style>
                            .cls-637b8512f95e86b59c57a116-1 {
                                fill: none;
                                stroke: currentColor;
                                stroke-miterlimit: 10;
                            }
                        </style>
                    </defs>
                    <path class="cls-637b8512f95e86b59c57a116-1"
                        d="M17.73,6.27V1.5h-1A7.64,7.64,0,0,0,9.14,9.14v.95H6.27v3.82H9.14V22.5h4.77V13.91h2.86V10.09H13.91V9.14a2.86,2.86,0,0,1,2.86-2.87Z">
                    </path>
                </svg></a>
            <a>
                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                    stroke-width="1.5" width="20" height="20">
                    <defs>
                        <style>
                            .cls-637b8512f95e86b59c57a137-1 {
                                fill: none;
                                stroke: currentColor;
                                stroke-miterlimit: 10;
                            }
                        </style>
                    </defs>
                    <path class="cls-637b8512f95e86b59c57a137-1"
                        d="M12.94,1.61V15.78a2.83,2.83,0,0,1-2.83,2.83h0a2.83,2.83,0,0,1-2.83-2.83h0a2.84,2.84,0,0,1,2.83-2.84h0V9.17h0A6.61,6.61,0,0,0,3.5,15.78h0a6.61,6.61,0,0,0,6.61,6.61h0a6.61,6.61,0,0,0,6.61-6.61V9.17l.2.1a8.08,8.08,0,0,0,3.58.84h0V6.33l-.11,0a4.84,4.84,0,0,1-3.67-4.7H12.94Z">
                    </path>
                </svg>
            </a>
        </div>

    </nav>

    <div class="g-hero">
        <img class="hero-logo" src="{{ asset('images/local/logo-yousee.png') }}" />
        <div class="hero-text">
            <span class="fittopage">Service Kami</span>
        </div>
    </div>

    <div class="g-services">
        <div class="g-menu">
            <a class="menu active">
                Billboard
            </a>
            <a class="menu">
                Baliho
            </a>
            <a class="menu">
                Bando Jalan
            </a>
            <a class="menu">
                Videotron
            </a>
            <a class="menu">
                Megatron
            </a>
            <a class="menu">
                JPO
            </a>
            <a class="menu">
                Led Banner
            </a>
        </div>

        <div class="g-content">
            <img
                src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBUPEBIVEBUXFhgYFRUQFRUWFRYYFRgYGBcXGBcYHSohGBolGxcXIjEhJSkrLi8uGB8/ODMuNyguLisBCgoKDg0OGxAQGy0lHyUtLS0tKystLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIANYA6wMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAACAAEFBgMEBwj/xABHEAACAQMCAgcECAQFAgMJAAABAgMABBESIQUxBhMiQVFhcQdSgZEUFSMyQpKh4aKxwdEzYnKC8EPCJFODJTRjc7Kzw9Px/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECAwQFBv/EADQRAAEDAgMFBwMEAgMAAAAAAAEAAhEDIQQxURITQWFxBTKBkaGx8CLR4QZCwfEUohUzkv/aAAwDAQACEQMRAD8AsJFCaM0JFdZc1MRQGjpqaCgpGnIpqFFNTYp6VCENNREU1CE1DRUqaENKnpqEk2KbFHTU5QhpqOhpoTUqVKhCVNT0qEJqaipUJoabFFimoQmpxSxTUIT4pYpZpZoSUmaY1kIoDVYU0BFNRkUJoQmNCaOgIpoQ01GRTUKKahxRUqEIKVFTEUIQ0qempoTUqVNQhKhoqVMFJDSp8UsU0IaVPSoQmpUqVCEqasd7xSO0ie4kha4Cj7itp5kDJPujv2PpWtwa/W4gSYd43Hgw5j50toTCfCVuU2KLFLFNCHFKnpUIUwaxkVlNCRVSksZFMRRkUJpoQGmoyKEihRTUxFFTU0IaGjxTYoQhxQ4rJimxQkseKWKLFNTQhpqLFLFCENNRYpqEJU1avEOJQW4zNKkf+ogE+g5n4VU+J+0a3Ta3jaY+8/YT+5+QqLqjW5lTaxzsldsVo8R4tbWwzPKkfkT2j6KNz8qoC9MlmjkN3JcKx2jiseriUAbkvK4ZtztgDuPlVfveF/Y/SxJGqs20Lzo9zp5ayoAyCc9wO3LG9ZXY0SQ1ptxOXhqrxh4guK6FxHpa/wBHNzbW5kiBI62V0RMjbZc6mOe7Y1BcL6ScQa4gmuVdLdydljKxsMHOgn7x8N+YqlCeRkWHUdAYlVJwoZsAnfYchvUjBGY7sR3UjAxnTlCsullHZTOrGnVgHBON6odiHl2fh/SuZRaAZHzn8C65Jx3h/VqoSe8kkjyYYoyFAfI7bHbHPcE1p8K4OeHrFl2K3G4RwMxvpDBSQcE4yCRtlaw9Brie4aSHeQxpGiAAdlE1ADbu35mtPpfw2ZLh41GJexIoXc5ADd3+k1v5zfRYZ4K2YpYrT4JffSLeObGNS5I8DyP61vYq4GVFBSxRYpYoQpcihIo6YiqlNARQEVkIpjQEisVMRRkUNNJARSosU2KaE1NRYpqEk2KbFPSpIQkUNZVQnYAn0rYj4c554X9TVGIxlDDCazw3kcz0AufAFW0qFSr3Gk+3nl6rRoo42bZQT6VLxWMY7tXr/atkADlt/prz+J/VFFtqDC7mfpHl3j47K6VLsh5vUdHS/wCPdQk/Dp9BMfVl+5ZXZV+LKrfyqEvOB8TmhMckiwvqPassHKYGBmVkKnOc45+I5VdqVcZ36hxxMy3oBb32v9lv/wCLoRF51m/tHovPXSrold2Z62TVKjE5kKsCCMff5gc9iCQfGg6PcQThzma4tBcO8f2SXGBGFfIMjKQS2QMAbbE+VeiCKqfSboFaXUbCJVtZCdWuJFAYjOzgfhyc7Y3wTnFasP261xis2OYk+mceJUHYJzbsdPWJ+3ouF8UvRPIZRFFBn8EClUHopJxU1YXFpaWqTGJLu5lZsCcaoYEQ6d0/G7bnfYDTt4xnHeC3FlMYLhNLDcEbqw7mU94/4cGtvoq188n0ez7Wvd1dUeIAc3cSAqAB3muzV2KlKZBbnnAI6jhx5rI2Q6+fzgoWZ9TFsAZJOFGAM74A7h5VdY+icNtw2HiN6JcSzLhIdOrqijldycLrIBzvgacczVc6TLALlhAyuoChmjULG0gA6wxgck1Zx+m2KV/0jvriPqZrmWWPIOh3JXs8tj4VNrttgcLTrmgQ0mb+yuvQvjD2t08qIZNURARTjVllI5A+R5VnkszE6OmYGlJY6i2UkLFXJJ3G+Khuj921tcQSoVkZY2AIJKMdBXGds7gipq64p9JhSVyol6yTUqjGzYOceGRXXpXaCuTWs4g5Kz8I4d9Gj+j6g2nfYYxqG64ydw2ofCtzFVboRJ254ye8N+pBP8qteKubkooaWKLFLFNClqE0ZFCRVSmhIoTRmmNCisZFCRWSgIpoQ01KaRUUs7BFHMsQAPUnlUBfdM+HxAEzCTtFfscOQQAc4znTv94bbGk5zW5lMNJyCn6YKTsBn0qH4M95fv1yn6NZ7FG0fbzDAJxqyETO2cZI5c8i4RoFGBsB4b/qedcDH/qGjhzsUxtu43gDxvPSPFdHDdmPqjaedkev2UdHYsefZ9edbUdkg59r1/tRXTyjAjUHOcsx2XGMZHfnP6VjS3lbV1r7EY0pyGwzuRvuDzHfvXnMR23jK474aNGW9bu/2C69Hs2hTEkSed/TJZZbiONSSQAuMhd8AnAJA5DzrXN5I/8AhRnk3afAAIJA2zuDg8uWR8NmC2RBhVA3yfM88/OspI5d9cnabJMSTxPz3JW4QBYfOiieJukaF7u46lN+T9WNwwAz3/eG3eR8BtcI4nFdRCeAlo2J0sVK6tJIJAbfGQedcf8AbJxAy36QLuIowMDnrk7R/h0V0TiPEouC8NjDDWyIkaJy1yad/QZBJP7Vvq4QijSdcuebDL+5tfhmswxJc9wPdarHdXUcSl5XWNRzaVgqj4natfhnGLW61fR5km041dWwOnOcZ9cH5GuZdHboTBuMcTJuWLFLO2xq1OOfVRb5wcKDjbBJ3watvs86NyWccs04CzXDa3RPuxqMlUHdntHPwHdVdXC06LXBzpcIFogniNbDM2E2SZWc9wgW9fh0VtpUqVYVpUD006Nx8RtmiIAkXLQv7r+BPunkfnzArkHHbz6FbJw2AdWzxpJeuNnkeRdawk9yIrAY5Elq77XF/aStvDxB454SyyKsqyRHRKmrZhv2ZF1KxwRntHDCu52NiDtGk6SO8Bz4/cAcbgSsGMpiA8W4KkcPkt11mdHk7GIxG4TD5GCxIPZAzsBvtuK1+ofR1mk6NWnVjs6gAdOfHBzimmVQxCtqXOzYxkdxx3Hyq89EuO8Mh4bNaXyvIZJS2iJMsBoQKwZsAMCGI3/nXqSYXPY0OMEwq9YEtCmNsMy5Pdncfzqf4JYFknleRi8RVdIwEwzaSceO21V6wZdEgUnSrggsMNg5wSByPZ3qWjunWWQA4WR0Zh/q+0A+Ga3USNkErn1gSSArJ0WmAvWXkSmk+ewZW/hYf7fOrtXN7WTq7+3k5BsKfPcgg/mU/Cuk4rU05yqOA6JsU1FSqaSlsUJFZCKEiqVMrGRsT3AEk9wA5k+AoTWvxizeeCSBJWh1rgsmNx7rDvU942zXNeJW92X+r7iVY5hC/wBEZ2AjkLugKq5+6zRrIq5xuxXbIqqtV3bC7RSp09twCtXF+nfDrbK9Z1zj8MA1fxbL+tVzjXtMja302qyRzkDtMEKJ4jcEsceQ38a5xfWUsEjQzI0bqcMrjBH/ADxqfm4fw2Hh8NwZZJbqUMRApQJHpdk1SbE47OQNic+G9Y6mKdAI4kRs/fTxWynQa2ZE9fma1uNWvEnjW6uhLIjLrDsSyqCQBkDZM5XA2+8KuXsz6CrKn0y9iDI2kwo+dwN9bLyKHbAPP057fstW4vI5xcoksDkB5JtbSSspDLGCWwI154x3+uOoAV5rtTtSo1zqDLGYJmZEehN+YEZE26OEwstD3+QED579EgKpb9L2vb36u4eyppDGW5YBsBNiIUOzHJA1Nkc9iKuUqalK5IyCMjmMjG1cH490M4jwpvpMbFkQ5WeEkMndll5pzx3jfnXM7OoUapc17gHR9IOU/wA8Le614h72gEC3GFfOO8EvDfWy2k92cMHuZZZXEIUFSAAAELEBuyoxuMjfNWXpT0mtuHRdZMSWbIjjX77kc8eAHeTy9SAaJ7Ount3cXSWd0RKHDaZMBXUqpbtY2IwpHLPKoCK8+t+ORmQ5iMuEU8uqi1Mq/wC7Tv5sa2f4NQv2cQPpptLiRm4STnziL5AWVIrNDZp5uMX4fPVW3j3HOLLw9r93isw2BFAqFpdMhwGaQt2XAJYYHduByGt7HYXlNzfzu0h2iDyMWYAduTc933K1PbRxpX6q0jOoIzNIRuocDCpnlqAZiR3ahWboPJdXHDfoFrE0AYSdbdy/c7ZIxEBu7lcLnPZx6VJ1MjAbWyG7Z0AhuYvmcuZM8bKO0N/EkwPM+w9lWejwPEuNrKclWnaY+SRkuoPlhVX41I+2fiIkvI4FYMIo9wDnS8jHUD4HSsdb3APZdfRy65LoWw5arVnMjA8wDhdOR37+lXc8K4ZFF1DWyzJDksTF1xQndmdyD2jsT38tsYqdbGYdmJZVp/UGt2QBNuEyRzAgeJFplSw1WowsiCTPwKi9BOkMEcCQ2dg897gqz7aACxOTKSSib5xgDPzrq3D45ViUTMHkxl2UYXUdyFHujkM74AzvUXb3IjLw20KRxoucxqAp1R61OBgKOQ/ET4DmN3ghlaFXlbUXVW58tSg4wFGPTf1POuXi6gqEv2YkzclxMiRfgAMgPWy2swz6TJcdLZZ3Fumvkt+lSpVhU0q5r7QTwxeJRy3zOxWBNMSplD9pKcuc7/6fLfOcV0quAe1C/E/E5tJyI9MQx4xjtfxFh8K6/YrNrFA6An+Fh7QE0dmYk8FC9IWt2uZHtv8ACZtSgjTjVuRjuAOceWKlOH2d3c2RitbIOgfVJKBqmd1B2Uk5wFP3VB5nOc1VqsXCejFxMqSiWG31n7ETzLG8hBwOrXn97YHYZr1xMLlspgwImOfwLU4ON5YyMHR38wVIH9TUjcTZKkDHZXPmQoUH5AVhfrFv3WRg0hyspHfJo7eSOZ1g5PecmnWWPAD52GMDmRk1qomWLPWEPUtxGTCxS+64Pz7X/bXVI2DAMO8A/MZrmUv/AIiIn7pbcAgDtZ2GO7OcfGugdHZtdpC3foAPqvZP8q2jNYRlB5rfxTYoqWKkmpg0JFGRTEVUpLCRXGvbBKDfouQdECAgdxLO+/wYH5V2ciuL9PRZPf3bzTSiUOiIkMSso6uJEJcsy964wPCqMQYaOqvwzZceirkt0920Ecr4KR9WHYM7Ea2ZRhQWY9rSB6chWbgnRa7u5zbpGylX0yswwsRBw2rzG/Z57VGXUIj0FSx1IGBZdG+4Onc6lBBGrbJB2rq3sStJBDPOzHQzhVU5xqUZdvjqUZ8j4Vx8VWbhaDntEaDmT97ldCmx1V4Hn0HyF0HhPDorWFLeEaURcDz8SfMnJJ8TW3SpV4Ykkyc13QIsFzrph0nuJb9OE2cotiWVZZz94Fhq0r4YXHLck4yO+Q6Q3lpwywltzM88siMqpNI0ssjuunJBPZXvOAB8Tvk6SdBOHXU5uZpJI3YoHEbjDFsImQVJBOANsVn6L8E4ZDKwtbY601Zmkw5VlbQQCWJjO57hkA/HpuqYc02bIdDQNoQLmQSS6ZjgLHgRCzijWJc6La6Dpkq57L+hUkLfTrpSjFSIo2GGUOMM7D8JKkgDngnNDB7H4xLl7pjHnIVYwJMdw1kkA+en4CrpJPcNr5kLP1bLAArCMKCSpZs6skKSDyzjBrZ4bblGeUgwowUCN2zjTuXbcgE5AwCdl33OAP7QxG26qHwTwEHLICeufGb8FZ/g02sh14/HT24LUitrK2ga3jhVkiIGggN9o+y5LZyxJGT3ZFZJLqc6kXQhjk6s9WdRJwhUR6kxyLA8sYznANQN9x7g1ozmS4W5ZtQKoBI3afWwJQYzqA3Y5GBjFR1z08lVStpZfR0UsDJeZUK3YzmKMFixMsfIknX6mq24eo8hwaTJzdacpjaNyTOpvyVhr4alZt4j2HDzzHHlKvPChKCwdTzJLucljkjYd0eACPIjvziL4hLaWimO4vBFGSzGNmUOwclmU47TDJPIA+dc+49xW8aJzc8SCMBJiC1xHloy0ZTUu57ZiOG5qX5FapvDej97dnMEEsud9ekhfi52/Wt1Ds4Pl9SoA20wLTyLuI5DistTHuDoY25+c49CuqXXtR4bC7dRFJKWxqdVCKcDA+8c7DyFXfhPEI7qCO5jzpkUMAwwRnuPmDtXJuD+yW6chrqRIF2yqHXJ5j3QfPJ9K63Z20VtCkKYSONQqgnuHiTzPn51kx7MGwBuHcXO4mSfxnonQdWcSalgtmlQxSBhldxkj4gkH9QaOuabZrUo3pHxZbK1luWx2FOkH8TnZF+LEV5onmZ2Z3OpmJLE8ySck/Or97Wuk4uZxaRHMUJ7ZHJ5eR+C7j1LeVc7r13Y+FNGjtuzdfw4ffxjguPi6u2+BkEqn7bpRcRQiKNYkYKUE6xL14U57Il5jY4yNwO+svFZ+F/RFjtY5xcB1LyT6cMulgVXS2FGSDjHdzNVuumx+3MtIgxfjz6KiS3Iqz23FLJ9LSW8n0nZesjlCxsdgJWQqTqxzAOGOTtmtW/XSTjuYj+v960+CwRSTok0nUxknU+3ZABPf35FS17bh+tx3KHX4EZ592kmtVLJwWeq6XCfkqQsJBLA4U5OlhkZHa0529Cau/QG+660yeauQfU4OR5Ekn41V+G2SJa286AAOCr4zu6M3aPqpX5VLezY6Gng90gj4Er/AGraybdFhdEujX+1dqbFFinxVqipcihIrIRQ4qlSQhcnFeeLmAXnFXjDaRPduNXgJJTuPPBr0LPKI1aQ7BFLH0UFj/KvOvQ2AScQt1ZiPtQcg4Ope0oz5sAPjWbEG4CvpWa53JbfG+PRSR9UlsEIjji1S6GZBARpKNpDKxAwwzjdtt67L7PbMQ8MtlH4o+sPrKS//cB8K4bx7j8112ZFVFDs+iMMFDuAHIDElc6c6RgAk7bmu/dE3DWFqRy+jxf/AG1ry/b7ju2N4ST5D8rr9nMDSbR8/ClaVKlXmF11GT8PJlLs6iPMbsMdrMO69vOAudztVWvvaLwy0UxwGS5IZj9mOzlmLHttjIyTuAasfTLhs11YzW8DBZHAA1HAIDAspPdlQR8a5lwz2SXj7zzRwjwTMj/LYfrXVwbMK9hfiXxEDZHIZmBPiPO4WfEVq5hjB49Le3ErJL7T726lSGBY7NXYLrI611ydzvhT6aajb66jmcLPdXHEJNZ+zTMkfZa4RSqIwBGVt2KjGzHBOdr5w72acKt8GbVO3d176QSPBExn0OastotvAmLaAKuM/YIqLzIOTt4E5q9+LwzI/wAZh62F+H1fUfC3KLrOKNR3/YR7+mS5anRbidzEYIbVbSJ2DO84WIuQkYGYhlo+0hbAH4seObXb9Ap5GD3l/KxBYhbb7JQJCC66zklSVG2ByFWv6WzZBKrsdovtHGMnfG3JWGPGgWN2I7LuCVJMzBQoXBGEXnz7+eN6zPxlZzYs0cgJvndxzI0PC3AK1tFg1PzRRnDujPCbQ/ZwRlwRu461wTy+9nTyPLFTsc7NjEZUbZ6zAwCDyHf3fOscNmw/EEGdliUAY8zzrYghCDAJP+okn9ax1Xh13EuOpk+/3Kua2LAQOSwiCVsa5MbbiIY38mO+39KdLCMHJXUeeX33xjPhnHfWzSqveO6dLeynsBIDGw2qhe0vpoLNDaW7f+Ide0w/6Knvz75HIdw38M5un/TyOyU28BElyR6rFnvbxbwX4nuzxC5neR2kkYuzElmY5JJ5kmuz2V2ZvYrVR9PAa8+nv4LFicTs/Q3PjyWvSogCaPqj34HrXqlzE8MLOwRFLsxAVVBJJPIADmaF0Kkgggg4IOxBHcalOH2F0CJoRJHjlKMxBdtz1hIA2z31J2nRqe4bWWMrNuTEr3BJ85B9nn1epBhPBQNQA5qL6O8MS6nWKSZLePnJLIVARR4aiMknAA86nmt0EoijkWcGN4hImcP2SikDzxyqXsugLY1SJpHebqUAD/04f/2Vq8UnS0liitbiNlIPWfQ1RChBG3WKWkGRn8edqtpUnsqbZNiIi2c5zny08bqmpVa9sN6yrDwPo9dHhBaRDF1cjSBZQyuUxg4UjI3ORnwqP6Iy6OIsnc6H54Df3qtTzyFCHlkY69Sl5GOfMqTu2ynPlUpwe8zdW9xy7So/kxyPkQdvQ+FamPvBWd7P3DxXU8U+KLFPirlWpYihIrIaHFUqahemM3V8Ou3zj7CQZ83UoP1YVwPo3cLBOt0+MQ5dRndpFB6tR/v0k+AB8ge0e1abRwmce+0S/HrFf+SGuKcB+h9epvjL1I3K26qWb/LlmGkeJGT/ADGTEH6lroMlhGqi2Yk5O9d79lHFRPw5IycvCTG3p95D6aTj/aa5D0yubKW7aSxUxwlY9KFdOkqiqwx6rnOTkk1n6D9Jm4dciTBaJ8LMviufvD/MvMfEd9cntLCHE0Ib3hcfbxHrC30KgpVJOS9EUE0wXGc77AAZJPOgs7uOeNZonEiMMqy8iP8AndWavFRBuuznktdJpGO0ekbbyHfxxpFMLeQ/fkPftGAvpvz5Vs0qltxkI9feUtnVaMdq5G4SPfOw1NuBkdrYHbn6VnW0H4iz7EHUdjkYO3Lx+dPJcYJVUdiPAYH5mwDQOJ2GBojOee77fpvn/ndUiXG5MfP/AEo2WeOJVGFAUeAAFYp7yNBlmA9NzyzyHlWN7RcEyyMw79R0r8u6oW/6YcJtSczxlsnIgHWNnv3QHHLvIp06RqOhoLjyB/PshztkXgKd+lEgFEZsgHfsjf1H/M1kg6z8en0XO3juefdVBm9pjSZ+hWMs3+eXsoPM6cj5kVDN0h41eHCzRwjOCtkhmYeRZA4U+rrXSpdi4ur+wNB4k/PYLK/HUWZunousTTIi6nZUUczIQoHxNcv6a+0rYwcPOO5rg7fCIH/6j8O41qDoNdTfa3JklO/avJwmPgnWHH+5ah+jt5afaGYrbaR9mLaPU7t5uyu3PvBHrXZwv6eZScHVnbR0i358bLFW7SLgRTCrkPC7ibLhJJMkkuQQueZJdtviTUlw7orLLjSQ2f8AyFef+JB1Y+LipTgPHuoQtcWy3U2QVkunHYG+w1Bj4bDFSFx0s4nOPsyIl7vo0WdvDXJn9MV3hTZmVzzUfkI+eaKx9nzY1SKVHebmVUA9Y4c5H/qCoG2vIke4jOiExpIsRtYweslUkL22DPpOM51Du3rJcTRvh7m4knJ3wQ8mk+GZCqqfQGmVoiheGE7EDU7aiSQxwAFUY0h2P+gUzA7oURJMOP2W1wXpCIIgZbVbifUT1104yFOMAFgW/lW1N0v4jcHRG6x9+LaPfHm0mfmMVDyR3kkOW0pF9oQFVE6zqEDv90DUQpB38ajlleMaojhgcgjmM7HHjtzHkKN4RZMUwblTj8Kupzmdy3ncyNIfgoOBQ3PDkgZDJJlCcNpwhGeRxzK+PhUbb23Err7vXSA966tP8OwqYsfZvevvJoi8dbZPyXP9KAS7IJkBveKiRdWyTSA9uMhgpG53GxBPf3ZoOD3wVt+W2rxwDlW9Qf8Am9Xqw9mUC/40zP5RqFHzOc/pVgsuh9hFygV/OTL/AKHb9KmKT5mwUTVZEXKmLWUOiuNwyhvmAay4pRxhQFUBQBgADAAHcB3UeK1LKpQihrLQkVSrFRfavxJILe3Z4kn+3LCOUAoSsMqgkHmA0inHfiuMcIjt5J1F1I0MRPbeJAxHfso5eoBx4Guke3dz/wCDXuxMfn1Q/pXJawVWjeFwzy8v7W6jZgWSUDUdO4ycendWOlWVYWPdj12qKmp7ot0tu+HMepYNGx7cT5KN5j3Wx3jyzmuscB9pXDrkASN9FfvWf7nwkG2PXT6VxSz4XLL/AIaPL/8AKRmA9TjAreHAyu8rxRb47b9Y2fDRCGwfI4rBi+y6OJ+oiHaj+dffmrqeKdSsDbRejIZ0ddaOrr7ysCPmNqiOJdMOG22RJcx5HNYj1jfEJnHxrnHDvZ3Ky6mDhTjPWPHboV55wnWMR5MFPpWn0isbeyVRaSWk0mrDJFH1zoME6i8jOO7HJeYrGz9NgGX1DGgAB87+ysPak2a31Vxl9payZFlZz3BH4iNCeuRq29cVDy9JeNXRKo8NtvgrbKZ5R5HqxJpPrpqJveLwSWfUfR3eZkAaa6lyEfvaJCWx34AC1i4dxy/t7ZYYpOqiBxrSMc223kk2HrtXTo9j4Oke7J1N/TL0WR+Or1BYx6eqlz0Mu7nt3bzy4OSbuZYkA8Qq9Y3w7HwqDtJLaC9MEqxRxIxDSWiGZmwCV0vIHPPSDgDv5YouKWdydL3TvKpO7yyNKq55ZGcAem2/OtbiNqkSjTMvplVz6Ac66Qa1ghogBZpc7vGfnJZ7jiSi++kJG00CY6uO9cnfTgt2tWN8kD+VSdx0s4nPgRN1K9wtYhj4vJn9MVU4b3qZVd1zjuHI7edSEnSS4k7MUQGeWcsT/KntjVG75IZllmLGVjIwOWFzIzN6gHbFa8yuhxsPLYZ/KakIOjnFroh+rkHdqYCLA+OnI+dTPD/ZZOTmaZI+/wCzBc/HkP1NIBxyCcsGZVX4bxhINRaPrG2xnAxz3yQcfCtmXpXMwxHEq+ZJb+1dCtPZzZKdUhkmPmQo/hGf1qx2HBbWD/ChjQ+IUavix3PzqYpv1UDUZnC5FwXh/EJpRJ9Hd1J3OnSpBGk7thScd+efjXTeLdH/AP2LAqRBZIrk61QAaiWkhYnxBBXfwqeK1NwDVYv5f0P9qHM2QOoSa8uJ6FcSuIv/AHK2bDZkvIjju69Ui/7ifiKsXRPo7ZxGRo1MhVgoM2Cw7CE5XGFcPrB2ztWjYWTJxOOV0wgckF9gTpOCoP3vw8s8jVqtI1E8mgjdEyR3vG0kb6vMYQeWKm1omVXtHYAW/pp8U67+vhRYq2VWgxT4o8UsUShBilijpYpyhShFCayEVT+n91xRBG9kmlIwxZ4cPKS2PvRMuCoxtjVz7qoJVoEqq+2Ho5ez3MM8cUksXUYBiUyYKyMX1Kv3fvruefwNUC26OytqyFXSNT6mLsoHMtHCGcDzIwO+r3bdIeHXjj6wa40iIrIryTTrJITs6DWOqwByVeZrSu+JXA65rYTrDLCsBNysZfqg2FVWCrkZcbgMdxk1n2JMrQHwICiU6KiNOslLkEoAAFhDGQgAgkM2BnJyqnnU3Hw/g8A1fSYZG1YxAjSuMAk5aRZPDGVjHMcqjb6G6d1hu5Ze1IqqszSPGRj76b9XtgDHPflWa/gt7WMtHJDIwOD1wLYzjACKdHnhlPPnUwwATCRcTZQ3EPpFxM0cMk00eR1ay7sBj/ylyARuNh3Z2rXvraaHRFcvNtl1R9XZ1bZ0seyTp8M1M3sV8YYzJK0SSPIqLCQkbCJULkxx4Xm4HLxqA4rZ9Q6oG1fZo7nHfIofHwUr+tRcDnCGmbSpS0mN9JonuTn8P0hnkBx3KCQoPlUpLw/h0KkS3BJxyVkXHmFXn+tR/COhN7eHAiaBe95wyLyB22ydj4Va+HeyWFf8edn8olC/q2c/KpNk8PNJxaOK59LIMyJBIJARg5UjUAQcjUMg5FbXD+KXhjFvBCG5gnQXcg92Dtjywa69YdB+Gw7iAOfGQs38JOn9KnYLdIxpRVQeCAKPkKkKZ4mOiRrN0XF7LodxidQhDxRgbCR9Cj/YTn+Gpvh/sn755wPFYlJ/iOP5V1HFLFT3TeKrNZxysqnY9AOHxAZRpccutc4/KuB+lT9nw+GEYiiSIf8Aw1Vf5Det3FLFTAAyVZcTmVjxSxWTFLFSUVjxSxR6aWmlKFjxU3wkZtpV9f5A1EYqa4AMpIv/ADcftVdXu+Sto9+Oq4zfRdXxEMgCt10e5G3a1A5xzHL5Vc1s2ju+sLAiRZAVVdI1ZRgeZySoO/gB4VUeln2d4W8NLfFXU/y1Vc7+B1uI5A2UMgDKe49SUBXwBOAR4gEY3zOIPzkoNJLfnAlbrJnyPjSHgdj/AD9KzYoSuakkhxSxT5xz+f8Afwp8UIQ4pYosUsUIUpihIrJimxVSsVU6TdB7S9y+OplP/UjA3P8AnXk3rsfOuacR6J8Vt51RYjdDkjLrePA5ZIIKY54JA9RXditCVpESmCuUwdD+J3SabrSqncpLLlQfEJEM/met/hXsqtou1LPJIcEERhY1IPMHOo49CK6LpocUgxqkXuVZ6SdGIU4fGwzphaYoMkk9bjAJ8tP6CuedHeDi/wCIBiuIlKs6nfsRBQq+eSqA+RNdc6cNp4X65/rVF9lEf2k7f5VHzY/2qTRIvqVB1nQNAug4pYrLimxUkli00tNZMUOKEoQYpYo8U2KcpQhxSxRYp8USiEGKWKPFKnKUIMU2KyUsUIhY8VLdHT2nHkP61G4qQ4EcSkeK/wBRVdXuFWUe+Fy/p5HEt12xISQygJoAOxG7kkg5/wAp7qneJcRCpAzaQj/RyDntBzKDgjvBUgZHI+u0d7UUCXCueQfJ9M5rbs1iXh0aKqI7wS4woGqREXO45sSCfE6fKpTkVBvEcyrJilijUgjI5Hf50+KkksRWh0kctx4d49P7f/ys2KWKELCMHcUsUTJ3jY/ofX+9NqPh/WiUQpSlTUqqVqfFMRT09CFj00iKKkaaFDe0g44avxqpeydezcHzj/8AyVeul3CzdWccIfq857WNWPhkZ+dRnRHo0LKCQa+sy69rGnPZ8MnGDn50mEBvifdD2ku8B7KYpqVKpqKVKlSoQlTYp6VCEGKVFQmhCGlT01CSVKlT0ISrd4Ofth6GtKtrhf8AjJ6n+RpPH0lNh+odVTfap1iPqjIDFhzRG58sa1OnnzGKHh2uWxXrYmlB61tTSAMVQhlZWyW1YYYzggpWx7XwcbeVDwG8IsUbSXCvIjhN2Clnyyj8WAFOBvjOMnAI3ut6I/c4c1McH1fR4te7dWmr10jNbdaXBZQ9vEwIOY03XkeyBkeVbtSUE9KmpU0JE0OafFNihCsH1Z/mHy/el9Wf5h8v3pUq5+9fqujumaJ/qs+8PlS+qj7w+VKlQartUt0zRL6qPvD5Ux4SfeHypUqe9cjdNWSfhxZETUBp78c6ZOGkRlNQySDnHhSpVDeuiOae7bKw/Ux98fl/em+pj74/L+9NSqe9fqo7piX1OffH5f3p/qU++Py/vSpUb5+qN0zRN9Sn3x+X96b6mPvj8v70qVG+fqjdM0T/AFKffH5f3pvqY++Py/vSpUb5+qN0zRN9Sn3x+X96f6jPvj5fvTUqYrP1S3LNE31IffH5f3pfUh98fl/elSp71yNyzRL6kPvj8v71lt+ElHDawcH3f3pUqRquhG6ZotDpZ0Ya9HZkRCB/1I+sX10k4PxrT4T0KeOFop5Y58tnaIIn4Sfs17PNSc476alSFRwAEo3bSSYW9YdGepj6sOuFLYCpgBWdmVQM7YBA+FbP1IffH5f3pUqlvX6o3LNE/wBSH3x+X96b6jPvj8v70qVPev1S3LNEvqM++Py/vT/UTe+Pyn+9KlRvX6o3LNF//9k=">
            <div class="text">
                <p class="title">
                    Billboard
                </p>
                <p class="definition">
                    Lorem ipsum dolor sit amet consectetur. Consequat aenean a sagittis et tincidunt sapien. A ut sit
                    dignissim nulla eros. Arcu cum enim ante vestibulum dui risus risus amet. Ornare nec lorem vivamus
                    pulvinar sem eleifend in non tortor.
                </p>
            </div>
        </div>
    </div>

    <div class="space-between-menus"></div>
    <div class="g-portfolio">
        <p class="title">Billboard yang Pernah Kami Kerjakan</p>
        <div class="container">
            <div class="item">
                <img
                    src="data:image/jpeg;base64,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" />

                <div class="text">
                    <span class="name">Nama Portfolio</span>
                    <span class="definition"> Lorem ipsum</span>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/fitty.min.js') }}"></script>
    <script>
        fitty('.fittopage');
    </script>
</body>

</html>
