const cars = [
    {
        title: "2009 Toyota Corolla",
        cash: "$4.500",
        down: "$2.000",
        financing: "$9.000",
        mileage: "152.000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2009 Toyota Corolla (1).webp",
            "imagenes/Sedan/2009 Toyota Corolla (2).webp",
            "imagenes/Sedan/2009 Toyota Corolla (3).webp",
            "imagenes/Sedan/2009 Toyota Corolla (4).webp",
            "imagenes/Sedan/2009 Toyota Corolla (5).webp",
            "imagenes/Sedan/2009 Toyota Corolla (6).webp"
        ],
        Rented: true
    },
    {
        title: "2010 Toyota Camry",
        cash: "$4,500",
        down: "$1,500 (Negotiable)",
        financing: "$9,000 (Negotiable)",
        mileage: "208,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2010 Toyota Camrry (1).webp",
            "imagenes/Sedan/2010 Toyota Camrry (8).webp",
            "imagenes/Sedan/2010 Toyota Camrry (9).webp",
            "imagenes/Sedan/2010 Toyota Camrry (2).webp",
            "imagenes/Sedan/2010 Toyota Camrry (3).webp",
            "imagenes/Sedan/2010 Toyota Camrry (4).webp",
            "imagenes/Sedan/2010 Toyota Camrry (5).webp",
            "imagenes/Sedan/2010 Toyota Camrry (6).webp",
            "imagenes/Sedan/2010 Toyota Camrry (7).webp"
        ],
        Rented: true
    },
    {
        title: "2013 Toyota Prius",
        cash: "$6,000",
        down: "$1,500 (Negotiable)",
        financing: "$10,000 (Negotiable)",
        mileage: "180,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2013 Toyota Prius (1).webp",
            "imagenes/Sedan/2013 Toyota Prius (2).webp",
            "imagenes/Sedan/2013 Toyota Prius (3).webp",
            "imagenes/Sedan/2013 Toyota Prius (4).webp",
            "imagenes/Sedan/2013 Toyota Prius (5).webp",
            "imagenes/Sedan/2013 Toyota Prius (6).webp"
        ]
    },
    {
        title: "2015 Mazda",
        cash: "$7,000",
        down: "$1,500 (Negotiable)",
        financing: "$10,500 (Negotiable)",
        mileage: "136,752",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2015 Mazda (1).webp",
            "imagenes/Sedan/2015 Mazda (2).webp",
            "imagenes/Sedan/2015 Mazda (3).webp",
            "imagenes/Sedan/2015 Mazda (4).webp",
            "imagenes/Sedan/2015 Mazda (5).webp",
            "imagenes/Sedan/2015 Mazda (6).webp",
            "imagenes/Sedan/2015 Mazda (7).webp",
            "imagenes/Sedan/2015 Mazda (8).webp"
        ]
    },
    {
        title: "2019 Volkswagen Jetta",
        cash: "$7,500",
        down: "$2,500 (Negotiable)",
        financing: "$11,000 (Negotiable)",
        mileage: "164,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2019 volkswagen jetta (1) N.webp",
            "imagenes/Sedan/2019 volkswagen jetta (2) N.webp",
            "imagenes/Sedan/2019 volkswagen jetta (3) N.webp",
            "imagenes/Sedan/2019 volkswagen jetta (4) N.webp",
            "imagenes/Sedan/2019 volkswagen jetta (5) N.webp",
            "imagenes/Sedan/2019 volkswagen jetta (6) N.webp"
        ]
    },
    {
        title: "2008 Cadillax DTS V8",
        cash: "$4,500",
        down: "$1,500 (Negotiable)",
        financing: "$8,000 (Negotiable)",
        mileage: "139,000",
        make: "Luxury",
        description: "Clean Title",
        images: [
            "imagenes/Luxury/2008 cadillax Dts v8 (1).webp",
            "imagenes/Luxury/2008 cadillax Dts v8 (2).webp",
            "imagenes/Luxury/2008 cadillax Dts v8 (3).webp",
            "imagenes/Luxury/2008 cadillax Dts v8 (4).webp",
            "imagenes/Luxury/2008 cadillax Dts v8 (5).webp",
            "imagenes/Luxury/2008 cadillax Dts v8 (6).webp"
        ]
    },
        {
          title: "2014 SUBARU FORESTER 2.5I PREMIUM",
          cash: "$4,500",
          down: "$1,500 (Negotiable)",
          financing: "$7,500 (Negotiable)",
          mileage: "185,089",
          make: "Suv",
          description: "",
          images: [
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (1).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (2).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (3).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (4).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (5).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (6).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (7).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (8).webp",
            "imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (9).webp"
          ],
          Rented: true
        },
        {
          title: "2006 LEXUS RX",
          cash: "$4,500",
          down: "$1,300 (Negotiable)",
          financing: "$8,500 (Negotiable)",
          mileage: "201,040",
          make: "Suv",
          description: "",
          images: [
            "imagenes/Suv/2006 LEXUS RX (1).webp",
            "imagenes/Suv/2006 LEXUS RX (2).webp",
            "imagenes/Suv/2006 LEXUS RX (3).webp",
            "imagenes/Suv/2006 LEXUS RX (4).webp",
            "imagenes/Suv/2006 LEXUS RX (5).webp",
            "imagenes/Suv/2006 LEXUS RX (6).webp",
            "imagenes/Suv/2006 LEXUS RX (7).webp",
            "imagenes/Suv/2006 LEXUS RX (8).webp",
            "imagenes/Suv/2006 LEXUS RX (9).webp"
          ]
        },
        {
            title: "2018 Subaru brz límite",
            cash: "$11.500",
            down: "",
            financing: "$9,500 (Negotiable)",
            mileage: "150.000",
            make: "Luxury",
            description: "Clean Title",
            images: [
                "imagenes/Luxury/2018 Subaru brz límite (2).webp",
                "imagenes/Luxury/2018 Subaru brz límite (1).webp",
                "imagenes/Luxury/2018 Subaru brz límite (3).webp",
                "imagenes/Luxury/2018 Subaru brz límite (4).webp",
                "imagenes/Luxury/2018 Subaru brz límite (5).webp",
                "imagenes/Luxury/2018 Subaru brz límite (6).webp",
                "imagenes/Luxury/2018 Subaru brz límite (7).webp",
                "imagenes/Luxury/2018 Subaru brz límite (8).webp",
                "imagenes/Luxury/2018 Subaru brz límite (9).webp",
                "imagenes/Luxury/2018 Subaru brz límite (10).webp"
            ]
        },
        {
            "title": "2001 Toyota Sequoia Limited",
            "cash": "$2,500",
            "down": "$1,000 (Negotiable)",
            "financing": "$4,500 (Negotiable)",
            "mileage": "280,000",
            "make": "Suv",
            "description": "Clean title",
            "images": [
                "imagenes/Suv/2001 Toyota sequoia limited (2).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (1).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (3).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (4).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (5).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (6).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (7).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (8).webp",
                "imagenes/Suv/2001 Toyota sequoia limited (9).webp"
            ]
        },
        {
            "title": "2007 Honda CR-V",
            "cash": "$5,500",
            "down": "$2,200 (Negotiable)",
            "financing": "$10,000 (Negotiable)",
            "mileage": "170,000",
            "make": "SUV",
            "description": "Clean Title",
            "images": [
                "imagenes/Suv/Honda crv 2007 (1).webp",
                "imagenes/Suv/Honda crv 2007 (6).webp",
                "imagenes/Suv/Honda crv 2007 (7).webp",
                "imagenes/Suv/Honda crv 2007 (2).webp",
                "imagenes/Suv/Honda crv 2007 (3).webp",
                "imagenes/Suv/Honda crv 2007 (4).webp",
                "imagenes/Suv/Honda crv 2007 (5).webp",
                "imagenes/Suv/Honda crv 2007 (8).webp"
            ],
            Rented: true
        },
        {
            "title": "Kia Spectra 2007",
            "cash": "$3.000$",
            "down": "$1.000$ (Negotiable)",
            "financing": "$5.500",
            "mileage": "125.000",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/Kia Spectra 2007 (1).webp",
                "imagenes/Sedan/Kia Spectra 2007 (2).webp",
                "imagenes/Sedan/Kia Spectra 2007 (3).webp",
                "imagenes/Sedan/Kia Spectra 2007 (4).webp",
                "imagenes/Sedan/Kia Spectra 2007 (5).webp",
                "imagenes/Sedan/Kia Spectra 2007 (6).webp",
                "imagenes/Sedan/Kia Spectra 2007 (7).webp",
                "imagenes/Sedan/Kia Spectra 2007 (8).webp",
                "imagenes/Sedan/Kia Spectra 2007 (9).webp"
            ],
             Rented: true
        },
        {
            "title": "Toyota Corolla 2010",
            "cash": "$5.000$",
            "down": "$1.700$ (Negotiable)",
            "financing": "$8.500",
            "mileage": "176.000",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/Toyota Corolla 2010 (1).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (3).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (4).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (5).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (6).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (7).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (8).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (9).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (10).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (11).webp",
                "imagenes/Sedan/Toyota Corolla 2010 (12).webp"
            ],
            Rented: true
        },
        {
            title: "Toyota prius 2013",
            cash: "$4.500",
            down: "1.500",
            financing: "7.500",
            mileage: "182.000",
            make: "Suv",
            description: "Clean Title",
            images: [
                "imagenes/Suv/Toyota prius 2013 (9).webp",
                "imagenes/Suv/Toyota prius 2013 (1).webp",
                "imagenes/Suv/Toyota prius 2013 (2).webp",
                "imagenes/Suv/Toyota prius 2013 (3).webp",
                "imagenes/Suv/Toyota prius 2013 (4).webp",
                "imagenes/Suv/Toyota prius 2013 (5).webp",
                "imagenes/Suv/Toyota prius 2013 (6).webp",
                "imagenes/Suv/Toyota prius 2013 (7).webp",
                "imagenes/Suv/Toyota prius 2013 (8).webp"
            ]
        },   
        {
            "title": "Ford fiesta 2015",
            "cash": "$3.000$",
            "down": "$1.000$ (Negotiable)",
            "financing": "$6.000$ (Negotiable)",
            "mileage": "134.009",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/Ford fiesta 2015 (1).webp",
                "imagenes/Sedan/Ford fiesta 2015 (2).webp",
                "imagenes/Sedan/Ford fiesta 2015 (3).webp",
                "imagenes/Sedan/Ford fiesta 2015 (4).webp",
                "imagenes/Sedan/Ford fiesta 2015 (5).webp",
                "imagenes/Sedan/Ford fiesta 2015 (6).webp",
                "imagenes/Sedan/Ford fiesta 2015 (7).webp"
            ],
           Rented:true
        },
        {
            "title": "2002 Ford F-150 XL",
            "cash": "$4.500$",
            "down": "$1.300$ (Negotiable)",
            "financing": "$8.000$ (Negotiable)",
            "mileage": "144.000",
            "make": "Truck",
            "description": "Clean Title",
            "images": [
                "imagenes/Trucks/2002 Ford F-150 XL (1).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (2).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (3).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (4).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (5).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (6).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (7).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (8).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (9).webp",
                "imagenes/Trucks/2002 Ford F-150 XL (10).webp",
            ]
        },
         {
            "title": "2016 Ford Fiesta SE",
            "cash": "$4.500$",
            "down": "$1.500$ (Negotiable)",
            "financing": "$8.000$ (Negotiable)",
            "mileage": "85,044",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/2016 Ford Fiesta SE (1).webp",
                "imagenes/Sedan/2016 Ford Fiesta SE (2).webp",
                "imagenes/Sedan/2016 Ford Fiesta SE (3).webp",
                "imagenes/Sedan/2016 Ford Fiesta SE (4).webp",
                "imagenes/Sedan/2016 Ford Fiesta SE (5).webp",
                "imagenes/Sedan/2016 Ford Fiesta SE (6).webp",
                "imagenes/Sedan/2016 Ford Fiesta SE (7).webp",
            ],
            Rented:true
        },
        {
            title: "Toyota Corolla 2012",
            cash: "4.000$",
            down: "1.500$",
            financing: "7.500$",
            mileage: "270.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/Toyota Corolla 2012 (4).webp",
                "imagenes/Sedan/Toyota Corolla 2012 (1).webp",
                "imagenes/Sedan/Toyota Corolla 2012 (2).webp",
                "imagenes/Sedan/Toyota Corolla 2012 (3).webp",
                "imagenes/Sedan/Toyota Corolla 2012 (5).webp",
                "imagenes/Sedan/Toyota Corolla 2012 (6).webp",
                "imagenes/Sedan/Toyota Corolla 2012 (7).webp"
            ],
            Rented:true
        },
        {
            title: "2009 Toyota Camry LE",
            cash: "5.000$",
            down: "1.500$",
            financing: "9.000$",
            mileage: "139,527",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/2009 Toyota Camry LE (2).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (1).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (3).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (4).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (5).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (6).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (7).webp",
                "imagenes/Sedan/2009 Toyota Camry LE (8).webp"
            ]
        },
        {
            title: "Toyota Camrry 2011 hybrid",
            cash: "5.500$",
            down: "1.700$",
            financing: "9.500$",
            mileage: "81,000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (3).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (1).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (2).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (4).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (5).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (6).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (7).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (8).webp",
                "imagenes/Sedan/Toyota Camrry 2011 híbrido (9).webp"
            ]
        },
        {
            title: "Toyota Camrry 2013 le",
            cash: "5.000$",
            down: "1.700$",
            financing: "9.000$",
            mileage: "210.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/Toyota Camrry 2013 le (4).webp",
                "imagenes/Sedan/Toyota Camrry 2013 le (3).webp",
                "imagenes/Sedan/Toyota Camrry 2013 le (1).webp",
                "imagenes/Sedan/Toyota Camrry 2013 le (2).webp"
            ]
        },
        {
            title: "2001 MITSUBISHI GALANT ES",
            cash: "2.700$",
            down: "800$",
            financing: "5.500$",
            mileage: "145.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (1).webp",
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (2).webp",
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (3).webp",
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (4).webp",
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (5).webp",
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (6).webp",
                "imagenes/Sedan/2001 MITSUBISHI GALANT ES (7).webp"
            ]
        },
        {
            title: "2003 suzuki serio",
            cash: "3.000$",
            down: "1.000$",
            financing: "6.500$",
            mileage: "84.000",
            make: "Suv",
            description: "Clean Title",
            images: [
                "imagenes/Suv/2003 suzuki serio (1).webp",
                "imagenes/Suv/2003 suzuki serio (2).webp",
                "imagenes/Suv/2003 suzuki serio (3).webp",
                "imagenes/Suv/2003 suzuki serio (4).webp",
                "imagenes/Suv/2003 suzuki serio (5).webp"
            ]
        },
        {
            title: "2013 Toyota higlander",
            cash: "7.000$",
            down: "2.000$",
            financing: "11.000$",
            mileage: "84.000",
            make: "Suv",
            description: "Clean Title",
            images: [
                "imagenes/Suv/2013 Toyota higlander (1).webp",
                "imagenes/Suv/2013 Toyota higlander (2).webp",
                "imagenes/Suv/2013 Toyota higlander (3).webp",
                "imagenes/Suv/2013 Toyota higlander (4).webp",
                "imagenes/Suv/2013 Toyota higlander (5).webp",
                "imagenes/Suv/2013 Toyota higlander (6).webp",
                "imagenes/Suv/2013 Toyota higlander (7).webp"
            ]
        },
        {
            title: "2004 honda Civic",
            cash: "2.600$",
            down: "800$",
            financing: "5.000$",
            mileage: "154.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/2004 honda Civic (1).webp",
                "imagenes/Sedan/2004 honda Civic (3).webp",
                "imagenes/Sedan/2004 honda Civic (4).webp",
                "imagenes/Sedan/2004 honda Civic (5).webp",
                "imagenes/Sedan/2004 honda Civic (6).webp",
                "imagenes/Sedan/2004 honda Civic (7).webp",
                "imagenes/Sedan/2004 honda Civic (8).webp",
                "imagenes/Sedan/2004 honda Civic (9).webp",
                "imagenes/Sedan/2004 honda Civic (10).webp"
            ]
        },
        {
        title: "2016 Mercedes Benz C300",
        cash: "$10,500",
        down: "$4,000 (Negotiable)",
        financing: "$15,500 (Negotiable)",
        mileage: "109,000",
        make: "Luxury",
        description: "Clean Title",
        images: [
            "imagenes/Luxury/2016 Mercedes Benz C300 (1).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (2).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (3).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (4).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (5).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (6).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (7).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (8).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (9).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (10).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (11).webp",
            "imagenes/Luxury/2016 Mercedes Benz C300 (12).webp"
        ]
    },
    {
        title: "Hummer 2007 h3",
        cash: "$5,600",
        down: "$2,000 (Negotiable)",
        financing: "$10,500 (Negotiable)",
        mileage: "198.000",
        make: "Suv",
        description: "Clean Title",
        images: [
            "imagenes/Suv/Hummer 2007 h3 (1).webp",
            "imagenes/Suv/Hummer 2007 h3 (2).webp",
            "imagenes/Suv/Hummer 2007 h3 (3).webp",
            "imagenes/Suv/Hummer 2007 h3 (4).webp",
            "imagenes/Suv/Hummer 2007 h3 (5).webp",
            "imagenes/Suv/Hummer 2007 h3 (6).webp"
        ]
    },
    {
        title: "Toyota 4runner 2008",
        cash: "$10,000",
        down: "$5,000 (Negotiable)",
        financing: "$14,000 (Negotiable)",
        mileage: "103.000",
        make: "Suv",
        description: "Clean Title",
        images: [
            "imagenes/Suv/Toyota 4runner 2008 (1).webp",
            "imagenes/Suv/Toyota 4runner 2008 (2).webp",
            "imagenes/Suv/Toyota 4runner 2008 (3).webp",
            "imagenes/Suv/Toyota 4runner 2008 (4).webp",
            "imagenes/Suv/Toyota 4runner 2008 (5).webp",
            "imagenes/Suv/Toyota 4runner 2008 (6).webp",
            "imagenes/Suv/Toyota 4runner 2008 (7).webp",
            "imagenes/Suv/Toyota 4runner 2008 (8).webp",
            "imagenes/Suv/Toyota 4runner 2008 (9).webp"
        ]
    },
    {
            "title": "Toyota tundra 2023",
            "cash": "$5.000 Down",
            "down": "$5.000 (Negotiable)",
            "financing": "$47.000 (Negotiable)",
            "mileage": "56.000",
            "make": "Truck",
            "description": "Clean Title",
            "images": [
                "imagenes/Trucks/Toyota tundra 2023 (1).webp",
                "imagenes/Trucks/Toyota tundra 2023 (2).webp",
                "imagenes/Trucks/Toyota tundra 2023 (3).webp",
                "imagenes/Trucks/Toyota tundra 2023 (4).webp",
                "imagenes/Trucks/Toyota tundra 2023 (5).webp",
                "imagenes/Trucks/Toyota tundra 2023 (6).webp",
            ]
        },
        {
        title: "2010 Toyota Corolla",
        cash: "$5,500",
        down: "$1,500 (Negotiable)",
        financing: "$9,000 (Negotiable)",
        mileage: "172.000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2010 Toyota Corolla 2 (1).webp",
            "imagenes/Sedan/2010 Toyota Corolla 2 (2).webp",
            "imagenes/Sedan/2010 Toyota Corolla 2 (3).webp",
            "imagenes/Sedan/2010 Toyota Corolla 2 (4).webp",
            "imagenes/Sedan/2010 Toyota Corolla 2 (5).webp",
            "imagenes/Sedan/2010 Toyota Corolla 2 (6).webp",
            "imagenes/Sedan/2010 Toyota Corolla 2 (7).webp",
        ]
    },
        {
        title: "Kia forte 2020",
        cash: "$7,000",
        down: "$2,000 (Negotiable)",
        financing: "$12,000 (Negotiable)",
        mileage: "123.000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/Kia forte 2020 (1).webp",
            "imagenes/Sedan/Kia forte 2020 (2).webp",
            "imagenes/Sedan/Kia forte 2020 (3).webp",
            "imagenes/Sedan/Kia forte 2020 (4).webp",
            "imagenes/Sedan/Kia forte 2020 (5).webp",
            "imagenes/Sedan/Kia forte 2020 (6).webp",
            "imagenes/Sedan/Kia forte 2020 (7).webp",
        ]
    },
        {
        title: "Kia forte 2021",
        cash: "$7,000",
        down: "$2,000 (Negotiable)",
        financing: "$11,500 (Negotiable)",
        mileage: "98,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/Kia forte 2021 (1).webp",
            "imagenes/Sedan/Kia forte 2021 (2).webp",
            "imagenes/Sedan/Kia forte 2021 (3).webp",
            "imagenes/Sedan/Kia forte 2021 (4).webp",
            "imagenes/Sedan/Kia forte 2021 (5).webp",
            "imagenes/Sedan/Kia forte 2021 (6).webp",
            "imagenes/Sedan/Kia forte 2021 (7).webp",
            "imagenes/Sedan/Kia forte 2021 (8).webp",
            "imagenes/Sedan/Kia forte 2021 (9).webp",
        ]
    },
        {
        title: "2011 BMW serie 3",
        cash: "$5,000",
        down: "$1,500 (Negotiable)",
        financing: "$9,000 (Negotiable)",
        mileage: "175,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2011 BMW serie 3 (1).webp",
            "imagenes/Sedan/2011 BMW serie 3 (2).webp",
            "imagenes/Sedan/2011 BMW serie 3 (3).webp",
            "imagenes/Sedan/2011 BMW serie 3 (4).webp",
            "imagenes/Sedan/2011 BMW serie 3 (5).webp",
            "imagenes/Sedan/2011 BMW serie 3 (6).webp",
            "imagenes/Sedan/2011 BMW serie 3 (7).webp",
            "imagenes/Sedan/2011 BMW serie 3 (8).webp",
        ]
    },
     {
        title: "2007 TOYOTA 4RUNNER SR5",
        cash: "$6,800",
        down: "$2,500 (Negotiable)",
        financing: "$11,000 (Negotiable)",
        mileage: "220.000",
        make: "Suv",
        description: "Clean Title",
        images: [
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (10).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (1).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (2).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (3).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (4).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (5).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (6).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (7).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (8).webp",
            "imagenes/Suv/2007 TOYOTA 4RUNNER SR5 (9).webp",
        ]
    },
     {
        title: "2015 honda fit",
        cash: "$6,500",
        down: "$2,000 (Negotiable)",
        financing: "$11,000 (Negotiable)",
        mileage: "157.000",
        make: "Suv",
        description: "Clean Title",
        images: [
            "imagenes/Suv/2015 honda fit (1).webp",
            "imagenes/Suv/2015 honda fit (2).webp",
            "imagenes/Suv/2015 honda fit (3).webp",
            "imagenes/Suv/2015 honda fit (4).webp",
            "imagenes/Suv/2015 honda fit (5).webp",
            "imagenes/Suv/2015 honda fit (6).webp",
            "imagenes/Suv/2015 honda fit (7).webp",
        ]
    },
    {
            "title": "2013 FORD F-150 XL",
            "cash": "$7.000$",
            "down": "$2.500$ (Negotiable)",
            "financing": "$11.500$ (Negotiable)",
            "mileage": "173.000",
            "make": "Truck",
            "description": "Clean Title",
            "images": [
                "imagenes/Trucks/2013 FORD F-150 XL (1).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (2).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (3).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (4).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (5).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (6).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (7).webp",
                "imagenes/Trucks/2013 FORD F-150 XL (8).webp",
            ]
        },
        {
        title: "Hyundai Elantra 2020",
        cash: "$7,500",
        down: "$2,000 (Negotiable)",
        financing: "$12,000 (Negotiable)",
        mileage: "109,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/Hyundai Elantra 2020 (2).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (1).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (3).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (4).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (5).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (6).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (7).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (8).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (9).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (10).webp",
            "imagenes/Sedan/Hyundai Elantra 2020 (11).webp",
        ]
    },
        {
        title: "Honda Civic 2008",
        cash: "$4,500",
        down: "$1,300 (Negotiable)",
        financing: "$8,500 (Negotiable)",
        mileage: "138,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/Honda Civic 2008 (1).webp",
            "imagenes/Sedan/Honda Civic 2008 (2).webp",
            "imagenes/Sedan/Honda Civic 2008 (3).webp",
            "imagenes/Sedan/Honda Civic 2008 (4).webp",
            "imagenes/Sedan/Honda Civic 2008 (5).webp",
            "imagenes/Sedan/Honda Civic 2008 (6).webp",
            "imagenes/Sedan/Honda Civic 2008 (7).webp",
            "imagenes/Sedan/Honda Civic 2008 (8).webp",
        ]
    },
        {
        title: "2017 Toyota Camry LE",
        cash: "$7,500",
        down: "$2,000 (Negotiable)",
        financing: "$11,500 (Negotiable)",
        mileage: "211,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/2017 Toyota Camry LE (1).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (2).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (3).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (4).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (5).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (6).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (7).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (8).webp",
            "imagenes/Sedan/2017 Toyota Camry LE (9).webp",
        ]
    },
        {
        title: "Toyota Corolla 2011 ",
        cash: "$4,800",
        down: "$1,500 (Negotiable)",
        financing: "$8,500 (Negotiable)",
        mileage: "211,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/Toyota Corolla 2011  (1).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (2).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (3).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (4).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (5).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (6).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (7).webp",
            "imagenes/Sedan/Toyota Corolla 2011  (8).webp",
        ]
    },
        {
        title: "Toyota yaris 2018",
        cash: "$4,800",
        down: "$1,500 (Negotiable)",
        financing: "$8,500 (Negotiable)",
        mileage: "211,000",
        make: "Sedan",
        description: "Clean Title",
        images: [
            "imagenes/Sedan/Toyota yaris 2018 (1).webp",
            "imagenes/Sedan/Toyota yaris 2018 (2).webp",
            "imagenes/Sedan/Toyota yaris 2018 (3).webp",
            "imagenes/Sedan/Toyota yaris 2018 (4).webp",
            "imagenes/Sedan/Toyota yaris 2018 (5).webp",
            "imagenes/Sedan/Toyota yaris 2018 (6).webp",
            "imagenes/Sedan/Toyota yaris 2018 (7).webp",
            "imagenes/Sedan/Toyota yaris 2018 (8).webp",
        ]
    },
];

const itemsPerPage = 12;
let currentPage = 1;
let currentFilteredCars = cars; // Nuevo: guarda el arreglo filtrado actual

function renderCars(page, filteredCars = currentFilteredCars) {
    currentFilteredCars = filteredCars;

    // Ordenar: primero los que tienen Rented: true
    currentFilteredCars.sort((a, b) => {
        return (b.Rented === true ? 1 : 0) - (a.Rented === true ? 1 : 0);
    });

    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const carsToShow = currentFilteredCars.slice(start, end);

    const carList = document.getElementById("car-list");
    carList.innerHTML = "";

    carsToShow.forEach(car => {
        const carDiv = document.createElement("div");
        carDiv.className = "col-md-4 mb-4";
        carDiv.innerHTML = `
            <div class="card text-dark" style="height: 100%;">
                <img src="${car.images[0]}" class="card-img-top" alt="${car.title}" title="Click in the image to see more" data-bs-toggle="modal" data-bs-target="#carModal" onclick="openModal(${cars.indexOf(car)})">
                ${car.Rented ? `<div class="sold-out-banner">Rented-Alquilado</div>` : ""}
                <div class="card-body">
                    <h6 class="card-title">${car.title}</h6>
                    <p class="card-text">Cash: ${car.cash}</p>
                    <button class="Request-btn" onclick="openForm('${car.title}')">Request Information</button>
                </div>
            </div>
        `;
        carList.appendChild(carDiv);
    });

    updatePagination();
}

function openModal(carIndex) {
    const car = cars[carIndex];
    const carouselInner = document.getElementById("carousel-inner");
    carouselInner.innerHTML = ""; // Limpiar imágenes anteriores

    car.images.forEach((img, index) => {
        const itemDiv = document.createElement("div");
        itemDiv.className = `carousel-item ${index === 0 ? "active" : ""}`;
        itemDiv.innerHTML = `<a href="${img}" target="_blank"><img src="${img}" class="d-block w-100 modal-img-responsive" alt="${car.title}" title="Click to see full image"></a>`;
        carouselInner.appendChild(itemDiv);
    });

    document.getElementById("carModalLabel").textContent = car.title;

    // Mostrar datos del carro en el modal
    document.getElementById("car-cash").textContent = car.cash;
    document.getElementById("car-mileage").textContent = car.mileage;
    document.getElementById("car-description").textContent = car.description;
    document.getElementById("car-down").textContent = car.down || 'N/A';
    document.getElementById("car-financing").textContent = car.financing || 'N/A';

    document.querySelector("#carModal .btn").setAttribute("onclick", `openForm('${car.title}')`);
}


function updatePagination() {
    const totalPages = Math.ceil(currentFilteredCars.length / itemsPerPage); // Usa el filtrado actual
    const pagination = document.getElementById("pagination");
    const paginationBottom = document.getElementById("pagination-bottom"); // Nueva referencia
    pagination.innerHTML = ""; // Limpiar paginación superior
    paginationBottom.innerHTML = ""; // Limpiar paginación inferior

    for (let i = 1; i <= totalPages; i++) {
        const pageItem = document.createElement("li");
        pageItem.className = `page-item ${i === currentPage ? "active" : ""}`;
        pageItem.innerHTML = `<a class="page-link" href="#" onclick="goToPage(${i})">${i}</a>`;

        pagination.appendChild(pageItem); // Agregar a la paginación superior
        paginationBottom.appendChild(pageItem.cloneNode(true)); // Agregar a la paginación inferior
    }
}

function goToPage(page) {
    currentPage = page;
    renderCars(currentPage, currentFilteredCars); // Usa el filtrado actual
}

function filterCars() {
    const selectedMakes = Array.from(document.querySelectorAll('input[name="make"]:checked')).map(cb => cb.value);
    const filteredCars = cars.filter(car => selectedMakes.length === 0 || selectedMakes.includes(car.make));
    currentPage = 1; // Reinicia a la primera página
    renderCars(currentPage, filteredCars);
}

document.querySelectorAll('input[name="make"]').forEach(checkbox => {
    checkbox.addEventListener('change', filterCars);
});


// Renderizar la primera página al cargar
renderCars(1);

 
function openForm(carTitle) {
    document.getElementById('carModal').style.display = 'none'; // Oculta el modal de carro si está activo
    document.getElementById('car').value = carTitle; // Asigna el título del carro en el formulario
    document.getElementById('contactForm').style.display = 'flex'; // Muestra el formulario
}


function closeForm() {
    document.getElementById('contactForm').style.display = 'none'; // Oculta el formulario de contacto
    document.getElementById('carModal').classList.remove("show");  // Asegura que el modal de carros se cierre
    document.getElementById('carModal').setAttribute("aria-hidden", "true"); // Oculta el modal en accesibilidad
    document.querySelector(".modal-backdrop")?.remove(); // Remueve el fondo negro del modal

    // 🚀 **Solución clave:** Habilitar el desplazamiento en la página
    document.body.style.overflow = "auto"; // Habilita el scroll nuevamente
}




// Validaciones para los campos de nombre, teléfono y email
$("#contact").on("keypress", function (e) {
    validarkeypress(/^[A-Za-z@_.0-9\b\u00f1\u00d1\u00E0-\u00FC-]*$/, e);
});

$("#contact").on("keyup", function () {
    let valor = $(this).val();
    let emailRegex = /^[A-Za-z_0-9\u00f1\u00d1\u00E0-\u00FC-]{3,20}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{3}$/;
    let phoneRegex = /^[0-9]{10,11}$/;
    
    if (emailRegex.test(valor) || phoneRegex.test(valor)) {
        $("#scontact").text("");
        return 1;
    } else {
        $("#scontact").text("Enter a valid email or phone");
        return 0;
    }
});

$("#name").on("keypress", function (e) {
validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/, e);
});

$("#name").on("keyup", function () {
validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $(this), $("#sname"), "Only letters between 3 and 30 characters");
});

// Función de validación del envío
function validarenvio() {
    if ($("#contact").val().length === 0 || validarkeyup(/^[A-Za-z_0-9\u00f1\u00d1\u00E0-\u00FC-]{3,20}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{3}$/, 
    $("#contact"), $("#scontact"), "Enter a valid email or phone") == 0 && 
    validarkeyup(/^[0-9]{10,11}$/, $("#contact"), $("#scontact"), "Enter a valid email or phone") == 0) {
    alert("Error in email or phone");
    return false;
}
     if (validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $("#name"), $("#sname"), "Only letters between 3 and 30 characters") == 0) {
     alert("Error in name");
      return false;
    }
return true;
}

// Función para validar la entrada mientras se escribe
function validarkeypress(er, e) {
    key = e.keyCode;
    tecla = String.fromCharCode(key);
    a = er.test(tecla);
    if (!a) {
        e.preventDefault();
    }
}

// Función para validar la entrada después de escribir
function validarkeyup(er, etiqueta, etiquetamensaje, mensaje) {
    a = er.test(etiqueta.val());
    if (a) {
        etiquetamensaje.text("");
        return 1;
    } else {
        etiquetamensaje.text(mensaje);
        return 0;
    }
}
