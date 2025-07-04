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
            title: "2007 kia sportage",
            cash: "$3,500",
            down: "",
            financing: "$7,000 (Negotiable)",
            mileage: "140,000",
            make: "Suv",
            description: "",
            images: [
                "imagenes/Suv/2007 kia sportage (1).webp",
                "imagenes/Suv/2007 kia sportage (2).webp",
                "imagenes/Suv/2007 kia sportage (3).webp",
                "imagenes/Suv/2007 kia sportage (4).webp",
                "imagenes/Suv/2007 kia sportage (5).webp",
                "imagenes/Suv/2007 kia sportage (6).webp",
                "imagenes/Suv/2007 kia sportage (7).webp",
                "imagenes/Suv/2007 kia sportage (8).webp",
                "imagenes/Suv/2007 kia sportage (9).webp"
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
            "title": "Dodge Caravane 2006",
            "cash": "$2,000",
            "down": "N/A",
            "financing": "N/A",
            "mileage": "223,000",
            "make": "Suv",
            "description": "Clean title",
            "images": [
                "imagenes/Suv/Dodge caravane 2006 (1).webp",
                "imagenes/Suv/Dodge caravane 2006 (2).webp",
                "imagenes/Suv/Dodge caravane 2006 (3).webp",
                "imagenes/Suv/Dodge caravane 2006 (4).webp",
                "imagenes/Suv/Dodge caravane 2006 (5).webp",
                "imagenes/Suv/Dodge caravane 2006 (6).webp",
                "imagenes/Suv/Dodge caravane 2006 (7).webp",
                "imagenes/Suv/Dodge caravane 2006 (8).webp"
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
            "title": "2011 Chevrolet Suburban",
            "cash": "$7,600",
            "down": "$2,000 (Negotiable)",
            "financing": "$11,000 (Negotiable)",
            "mileage": "199,000",
            "make": "SUV",
            "description": "Clean Title",
            "images": [
                "imagenes/Suv/2011 Chevrolet Suburban (5).webp",
                "imagenes/Suv/2011 Chevrolet Suburban (2).webp",
                "imagenes/Suv/2011 Chevrolet Suburban (1).webp",
                "imagenes/Suv/2011 Chevrolet Suburban (3).webp",
                "imagenes/Suv/2011 Chevrolet Suburban (4).webp",
                "imagenes/Suv/2011 Chevrolet Suburban (6).webp",
                "imagenes/Suv/2011 Chevrolet Suburban (7).webp"
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
            "title": "Acura mdx 2007 ",
            "cash": "$3,500",
            "down": "$1,200 (Negotiable)",
            "financing": "$6,000 (Negotiable)",
            "mileage": "210.000",
            "make": "Suv",
            "description": "Clean Title",
            "images": [
                "imagenes/Suv/Acura mdx 2007 (2).webp",
                "imagenes/Suv/Acura mdx 2007 (1).webp",
                "imagenes/Suv/Acura mdx 2007 (3).webp",
                "imagenes/Suv/Acura mdx 2007 (4).webp",
                "imagenes/Suv/Acura mdx 2007 (5).webp",
                "imagenes/Suv/Acura mdx 2007 (6).webp"
            ]
        },
        {
            "title": "BMW 2015 x3",
            "cash": "$5,000",
            "down": "$1,700 (Negotiable)",
            "financing": "$9,000 (Negotiable)",
            "mileage": "130.000",
            "make": "Luxury",
            "description": "Clean Title",
            "images": [
                "imagenes/Luxury/BMW 2015 x3 (1).webp",
                "imagenes/Luxury/BMW 2015 x3 (2).webp",
                "imagenes/Luxury/BMW 2015 x3 (3).webp",
                "imagenes/Luxury/BMW 2015 x3 (4).webp",
                "imagenes/Luxury/BMW 2015 x3 (5).webp",
                "imagenes/Luxury/BMW 2015 x3 (6).webp",
                "imagenes/Luxury/BMW 2015 x3 (7).webp"
            ]
        },
        {
            "title": "2013 Fusión",
            "cash": "$5.000$",
            "down": "$2.300$ (Negotiable)",
            "financing": "$10.000",
            "mileage": "165.000",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/2013 Fusion (2).webp",
                "imagenes/Sedan/2013 Fusion (1).webp",
                "imagenes/Sedan/2013 Fusion (3).webp",
                "imagenes/Sedan/2013 Fusion (4).webp",
                "imagenes/Sedan/2013 Fusion (5).webp",
                "imagenes/Sedan/2013 Fusion (6).webp"
            ]
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
            "title": "Mitsubichi Lancer 2013",
            "cash": "$5.000$",
            "down": "$1.500$ (Negotiable)",
            "financing": "$8.500",
            "mileage": "115.000",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/Mitsubichi Lancer 2013 (1).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (3).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (4).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (5).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (6).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (7).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (8).webp",
                "imagenes/Sedan/Mitsubichi Lancer 2013 (9).webp"
            ]
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
            ]
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
            title: "2007 honda element",
            cash: "$3.500",
            down: "1.000",
            financing: "6.500",
            mileage: "150.000",
            make: "Suv",
            description: "Clean Title",
            images: [
                "imagenes/Suv/2007 honda element (1).webp",
                "imagenes/Suv/2007 honda element (2).webp",
                "imagenes/Suv/2007 honda element (3).webp",
                "imagenes/Suv/2007 honda element (4).webp",
                "imagenes/Suv/2007 honda element (5).webp",
                "imagenes/Suv/2007 honda element (6).webp",
                "imagenes/Suv/2007 honda element (7).webp",
                "imagenes/Suv/2007 honda element (8).webp"
            ]
        },
        {
            title: "2017 Infiniti QX60",
            cash: "7.000$",
            down: "2.000$",
            financing: "12.000$",
            mileage: "162.000",
            make: "Suv",
            description: "Clean Title 3 rows of seats",
            images: [
                "imagenes/Suv/2017 Infiniti QX60 (1).webp",
                "imagenes/Suv/2017 Infiniti QX60 (2).webp",
                "imagenes/Suv/2017 Infiniti QX60 (3).webp",
                "imagenes/Suv/2017 Infiniti QX60 (4).webp",
                "imagenes/Suv/2017 Infiniti QX60 (5).webp",
                "imagenes/Suv/2017 Infiniti QX60 (6).webp",
                "imagenes/Suv/2017 Infiniti QX60 (7).webp",
                "imagenes/Suv/2017 Infiniti QX60 (8).webp",
                "imagenes/Suv/2017 Infiniti QX60 (9).webp"
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
            "title": "Hyundai Elantra 2020",
            "cash": "$7.000$",
            "down": "$2.000$ (Negotiable)",
            "financing": "$11.500$ (Negotiable)",
            "mileage": "110.000",
            "make": "Sedan",
            "description": "Clean Title",
            "images": [
                "imagenes/Sedan/Hyundai Elantra 2020 (8).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (1).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (2).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (3).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (4).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (5).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (6).webp",
                "imagenes/Sedan/Hyundai Elantra 2020 (7).webp"
            ]
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
            ]
        },
        {
            "title": "2006 Dodge Ram 1500 SLT",
            "cash": "$4.800$",
            "down": "$1.500$ (Negotiable)",
            "financing": "$8.500$ (Negotiable)",
            "mileage": "168,502",
            "make": "Truck",
            "description": "Clean Title",
            "images": [
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (1).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (2).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (3).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (4).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (5).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (6).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (7).webp",
                "imagenes/Trucks/2006 Dodge Ram 1500 SLT (8).webp",
            ]
        },
        {
            title: "2009 honda pilot",
            cash: "5.500$",
            down: "1.500$",
            financing: "9.000$",
            mileage: "206.000",
            make: "Suv",
            description: "Clean Title 3 rows of seats",
            images: [
                "imagenes/Suv/2009 honda pilot (1).webp",
                "imagenes/Suv/2009 honda pilot (2).webp",
                "imagenes/Suv/2009 honda pilot (3).webp",
                "imagenes/Suv/2009 honda pilot (4).webp"
            ]
        },
       
        {
            title: "2008 Toyota Corolla",
            cash: "5.200$",
            down: "1.800$",
            financing: "10.500$",
            mileage: "154.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/2008 Toyota Corolla (3).webp",
                "imagenes/Sedan/2008 Toyota Corolla (2).webp",
                "imagenes/Sedan/2008 Toyota Corolla (1).webp",
                "imagenes/Sedan/2008 Toyota Corolla (4).webp",
                "imagenes/Sedan/2008 Toyota Corolla (5).webp",
                "imagenes/Sedan/2008 Toyota Corolla (6).webp",
                "imagenes/Sedan/2008 Toyota Corolla (7).webp"
            ]
        },
        {
            title: "Toyota Corolla 2017 sport",
            cash: "7.500$",
            down: "2.000$",
            financing: "11.500$",
            mileage: "205.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/Toyota Corolla 2017 sport (1).webp",
                "imagenes/Sedan/Toyota Corolla 2017 sport (2).webp",
                "imagenes/Sedan/Toyota Corolla 2017 sport (3).webp",
                "imagenes/Sedan/Toyota Corolla 2017 sport (4).webp",
                "imagenes/Sedan/Toyota Corolla 2017 sport (5).webp",
                "imagenes/Sedan/Toyota Corolla 2017 sport (6).webp",
                "imagenes/Sedan/Toyota Corolla 2017 sport (7).webp"
            ]
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
            ]
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
            title: "2017 Hyundai Accent",
            cash: "4.700$",
            down: "1.500$",
            financing: "8.500$",
            mileage: "103,000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/2017 Hyundai Accent (3).webp",
                "imagenes/Sedan/2017 Hyundai Accent (1).webp",
                "imagenes/Sedan/2017 Hyundai Accent (2).webp",
                "imagenes/Sedan/2017 Hyundai Accent (4).webp",
                "imagenes/Sedan/2017 Hyundai Accent (5).webp",
                "imagenes/Sedan/2017 Hyundai Accent (6).webp",
                "imagenes/Sedan/2017 Hyundai Accent (7).webp",
                "imagenes/Sedan/2017 Hyundai Accent (8).webp"
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
            title: "Toyota avalo 2014",
            cash: "7.500$",
            down: "2.000$",
            financing: "11.000$",
            mileage: "172.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/Toyota avalo 2014 (1).webp",
                "imagenes/Sedan/Toyota avalo 2014 (2).webp",
                "imagenes/Sedan/Toyota avalo 2014 (3).webp",
                "imagenes/Sedan/Toyota avalo 2014 (4).webp",
                "imagenes/Sedan/Toyota avalo 2014 (5).webp",
                "imagenes/Sedan/Toyota avalo 2014 (6).webp",
                "imagenes/Sedan/Toyota avalo 2014 (7).webp",
                "imagenes/Sedan/Toyota avalo 2014 (8).webp",
                "imagenes/Sedan/Toyota avalo 2014 (9).webp",
                "imagenes/Sedan/Toyota avalo 2014 (10).webp"
            ]
        },
        {
            title: "2014 Toyota Corolla le",
            cash: "6.500$",
            down: "2.000$",
            financing: "11.000$",
            mileage: "206.000",
            make: "Sedan",
            description: "Clean Title",
            images: [
                "imagenes/Sedan/2014 Toyota Corolla le (1).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (3).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (4).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (5).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (6).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (7).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (8).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (9).webp",
                "imagenes/Sedan/2014 Toyota Corolla le (10).webp"
            ]
        },
];

const itemsPerPage = 12;
let currentPage = 1;
let currentFilteredCars = cars; // Nuevo: guarda el arreglo filtrado actual

function renderCars(page, filteredCars = currentFilteredCars) {
    currentFilteredCars = filteredCars; // Actualiza el arreglo filtrado global
    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const carsToShow = filteredCars.slice(start, end);

    const carList = document.getElementById("car-list");
    carList.innerHTML = ""; // Limpiar los autos anteriores

    carsToShow.forEach(car => {
        const carDiv = document.createElement("div");
        carDiv.className = "col-md-4 mb-4";
        carDiv.innerHTML = `
            <div class="card text-dark" style="height: 100%;">
                <img src="${car.images[0]}" class="card-img-top" alt="${car.title}" title="Clik in the image to see more" data-bs-toggle="modal" data-bs-target="#carModal" onclick="openModal(${cars.indexOf(car)})">
                ${car.Rented ? `<div class="sold-out-banner">Rented</div>` : ""}
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
