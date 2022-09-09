<div id="main-wrapper" class="page-wrapper">        
    <div class="page-header section-padding style-dark full-height dc-six right-col-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="titleContainer">
                    <div class="heading-wrapper wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <!-- <span class="sub-title">Standards and Best Practices</span> -->
                        <h1><span>Articles</span></h1>
                    </div>
                    <!-- <div class="text-wrapper wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <p>All you need to know about Standards and Best Practices.</p>
                    </div> -->
                    <div id="breadCrumbContainer" class="btn-wrapper wow fadeInLeft" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item childy"><a href="https://sandbp.net">Home</a></li>
                            <li class="breadcrumb-item active childy">Resources</li>
                            <li class="breadcrumb-item childy"><a href="https://sandbp.net/articles">Articles</a></li>
                        </ol>
                    </div>
                </div><!-- End Col -->
            </div><!-- End Row -->
        </div>
    </div>
    <!-- Page Header -->
    <div id="partialContainer" class="about-section section-padding pt-0">
        <div class="container">
            <!-- why we are the best for you -->
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div id="accordContainer">
                        <div class="heading-wrapper with-separator">
                            <h2 class="h1">
                                <span>ISO 8583:</span>
                                Financial Transaction Messaging Standard
                            </h2>
                        </div>
                        <div style="margin-top: -8%;">
                            <img src="./assets/pictures/intro to ISO 8583 article page.jpg" alt="Records management as an information management discipline">
                        </div>
                        <div>
                            <p class="lead-text">
                            The ISO8583 standard specifies a message format that describes credit card and 
                            debit card data that is exchanged between devices and card issuers.
                            </p>

                            <p class="lead-text">
                            ISO 8583 message format is one of the most widely used format for financial 
                            messages. When a purchase is made at the point of sale or cash is withdrawn from an 
                            automated teller, its highly likely that an ISO 8583 formatted message has been used 
                            behind the scenes.
                            </p>

                            <p class="lead-text">
                            ISO 8583 is a complete specification which not only allows card originated 
                            transactions including purchase, withdrawal, deposit, refund, reversal, balance 
                            inquiry, payments and inter-account transfers but also defines system-to-system 
                            messages for secure key exchanges, reconciliation of totals, network sign-on/sign-off 
                            and other administrative messages. 
                            </p>

                            <p class="lead-text">
                            It is one of the many standards describing how to pack certain data fields such that 
                            it could reliably be unpacked as well and is mostly relevant for the financial 
                            transaction processing world. 
                            </p>

                            <p class="lead-text">
                            It helps the electronic system which reads the card number, the transaction amount, 
                            and other relevant data fields to pack it all up so that it could be transmitted 
                            electronically to a transaction processing system where it could then be unpacked 
                            back into individual data components and then processed. It also helps the 
                            transaction processing system pack and send the response back to the initiating 
                            device where it could again be unpacked, and the customer be intimated of the 
                            transaction response.
                            </p>
                            <p class="lead-text">
                            <b>
                            So why ISO 8583? <br>
                            </b>
                            More and more of our bank transactions are made over the Internet, rather than in 
                            traditional bank offices. This is no longer only true in the industrialized world, 
                            but globally.
                            </p>
                            <p class="lead-text">
                            To satisfy this new demand for electronic services, existing banks need to adopt new 
                            technical infrastructure, and to do so, they often find themselves forced to do 
                            modifications to their very core systems. 
                            </p>
                            <p class="lead-text">
                            To avoid this, they could try to utilize already existing interfaces for 
                            communication and transactions. One such interface is the messaging using the 
                            ISO 8583 standard. 
                            </p>
                            <p class="lead-text">
                            The ISO 8583 standard is used extensively in financial systems all over the world. 
                            It is carrying most of the worlds automated teller machine (ATM) and credit card 
                            transactions.
                            </p>

                            <p class="lead-text">
                            <b>
                            ISO 8583 Principles <br>
                            </b>
                            The ISO 8583 message is based on the principles that:
                                <ul style="margin-top:-2.5%" class="decoratedList">
                                    <li>
                                        <p class="lead-text">
                                        In a transaction message, you only get to pick any number of fields from a predefined 
                                        set of fields. So, if you need a field called ‘My girlfriend’s phone number’, sorry, 
                                        isn’t possible.
                                        </p>
                                    </li>
                                    <li>
                                        <p class="lead-text">
                                        The meta information of which fields are present in the message are also a part of 
                                        the message payload in a data structure called the ‘bitmap’.
                                        </p>
                                    </li>
                                </ul>
                            </p>

                            <p class="lead-text">
                                <b>Message Type Indicator (MTI)</b> <br>
                                The MTI consists of four numeric digits that specify the version of the ISO8583 
                                standard, message class, message function, and message origin. Three versions of the 
                                standard exist: 1987, 1993, and 2003. The combination of the four MTI fields 
                                specifies the type of interchange message that is being transmitted. Typically, 
                                applications use the MTI to determine whether the message requires a response, and 
                                the format of the response:
                                <ul style="margin-top:-2.5%" class="decoratedList">
                                    <li>
                                        <p class="lead-text">
                                        The values to include in the MTI
                                        </p>
                                    </li>
                                    <li>
                                        <p class="lead-text">
                                        The Message Data fields to include in the reply
                                        </p>
                                    </li>
                                </ul>
                            </p>

                            <p class="lead-text">
                                <b>One or more bitmaps</b> <br>
                                A message always includes a primary bitmap whose individual bits indicate which of 
                                the later fields are present in this message instance. The primary bitmap specifies 
                                whether fields 1 - 64 are present. If a secondary bitmap is also included, it 
                                specifies whether fields 65 - 128 exist. The standard also provides for a tertiary 
                                bitmap, which is rarely used. The bitmaps can appear in 8-byte 'packed' format or 
                                16-byte 'unpacked' format.
                            </p>

                            <p class="lead-text">
                                <b>Message Data Fields</b> <br>
                                Message Data Fields are defined by the ISO8583 standard, and contain information 
                                about the transaction, such as amounts, dates, times, and country codes. 
                                Organizations that use ISO8583 often customize these fields.
                            </p>

                            <div id="guidanceOutsource"  style="text-align: center; margin-bottom: 2.5%">
                                <img src="./assets/pictures/ISO8583-article-image.jpg" alt="Learn more about Introduction to ISO 8583"> <br>
                                <i>
                                    <caption>Introduction to ISO 8583 (&copy; codeproject)</caption>
                                </i>
                            </div>
                            <p class="lead-text">
                            <i>
                            If you require assistance or guidance in acquiring a certification in <a href="javascript:void">ISO 8583</a>, 
                            contact us now and speak to one of our officials.
                            </i>
                            </p>
                            <p class="lead-text">
                            Email: <a href="mailto:info@sandbp.net">info@sandbp.net</a>
                            <br>
                            Website: <a href="https://sandbp.net">www.sandbp.net</a>
                            </p>
                        </div>

                        <!-- Facebook share button -->
                        <!-- <div class="fb-share-button" data-href="https://sandbp.net/articles/ISO-30301-record-management-as-an-information-discipline" data-layout="button_count" data-size="small">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsandbp.net%2Farticles%2FISO-30301-record-management-as-an-information-discipline&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                                Share
                            </a>
                        </div> -->
                    </div>
                </div><!-- End Col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div id="fixedPort" class="heading-wrapper with-separator text-center">
                        <ul class="nav nav-tabs">
                            <li class="inactiveSideAboutPage"><a href="javascript:void">Quality, Health, Environment and Sustainability</a></li>
                            <li class="inactiveSideAboutPage"><a href="javascript:void">Continuity and Sustainability</a></li>
                            <li class="activeSideAboutPage"><a href="javascript:void">Information Security and IT Management</a></li>
                            <li class="inactiveSideAboutPage"><a href="javascript:void">Cyber and Data Security</a></li>
                            <li class="inactiveSideAboutPage"><a href="javascript:void">Business Management</a></li>
                            <li class="inactiveSideAboutPage"><a href="javascript:void">Audit</a></li>
                        </ul>
                    </div>
                    <!-- End Heading -->
                </div><!-- End Col -->
            </div><!-- End Row: why we are the best for you -->
        </div>
    </div>
</div>
