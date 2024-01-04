<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Privacy Policy | Xi Aviation</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    @auth
    <nav id="regisWhite" class="flex py-8 container justify-between sticky top-0 text-gray-700 bg-white">
            <a href="{{ route('home') }}">
                <img class="w-30 h-10" src="../assets/logo-black.png" alt="" />
            </a>
            <div class="flex flex-col">
                <div class="flex space-x-6">
                    <img class="cursor-pointer custom object-cover" src="{{ asset('storage/pp/' . Auth::user()->image) }}"
                        alt="" onclick="popUpWhite()" />
                </div>
                <div id="profilePopUpWhite" class="bg-white text-gray-700 rounded-lg px-4 py-6 w-9/12 mt-3 ml-4"
                    style="display: none">
                    <div class="flex border-b-2 border-gray-100 mb-5 pb-5">
                        <img class="custom" src="{{ asset('storage/pp/' . Auth::user()->image) }}" alt="" />
                        <h1 class="text-2xl w-1/2 text-center pl-2">{{ Auth::user()->fullname }}</h1>
                    </div>
                    <div class="flex flex-col space-y-5">
                        <a href="{{ route('profile') }}">
                            <div class="flex">
                                <img src="../assets/userUnactive.svg" alt="" />
                                <p class="pl-4">Profile</p>
                            </div>
                        </a>
                        <a href="{{ route('profilePass') }}">
                            <div class="flex">
                                <img src="../assets/icon/lock.svg" alt="" />
                                <p class="pl-4">Change Password</p>
                            </div>
                        </a>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="">
                                <div class="flex">
                                    <img src="../assets/icon/door.svg" alt="" />
                                    <button type="submit" class="pl-4">Log Out</button>
                                </div>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    @endauth

    @guest
        <nav id="noregisWhite" class="flex py-8 px-4 md:px-24 justify-between sticky top-0 text-gray-700 bg-white">
            <img class="w-11persen" src="../assets/logo-black.png" alt="" />
            <div class="flex space-x-6">
                <button class="w-36 border-r-2 border-gray-700 pr-8" type="button">
                    <a href="{{ route('login') }}">Check Order</a>
                </button>
                <button class="w-20" type="button"><a href="{{ route('login') }}">Log in</a></button>
                <button class="w-32 border-2 border-gray-700 rounded-full hidden md:block" type="button">
                    <a href="{{ route('register') }}">Register</a>
                </button>
            </div>
        </nav>
    @endguest

    <div class="w-full bg-blue-500 p-5">
        <div class="container">
            <h2 class="font-bold text-white text-4xl md:text-5xl">Privacy Policy</h2>
        </div>
    </div>

    <div class="container py-10 text-2xl">
        <p>
            This website is operated by K9 JETS. The privacy of our users is extremely important to us and therefore we
            encourage all users to read this policy very carefully because it contains important information. This
            privacy policy will inform you as to how we look after your personal data when you visit our website
            (regardless of where you visit it from) or by making an enquiry of us. We will also tell you about your
            privacy rights and how the law protects you.
        </p>
        <h3 class="text-4xl font-bold my-5">Purpose of this privacy policy</h3>
        <p>
            This privacy policy aims to give you information on how K9 JETS collects and processes your personal data
            which we collect through your contact with us, including any data you may provide during the course of our
            relationship with you as a client of potential client. The data maybe collected by your use of our website,
            through direct contact with our employees or authorised agents through telephone, email or social media or
            through any other legitimate means not specifically identified here.
            <br><br>
            This website is not intended for children and we do not knowingly collect data relating to children.
            <br><br>
            It is important that you read this privacy policy together with any other privacy policy or fair processing
            policy we may provide on specific occasions when we are collecting or processing personal data about you so
            that you are fully aware of how and why we are using your data. This privacy policy supplements other
            notices and privacy policies and is not intended to override them.
        </p>
        <h3 class="text-4xl font-bold my-5">Controller</h3>
        <p>
            K9 JETS is the controller and responsible for your personal data (collectively referred to as “K9 JETS”,
            “we”, “us” or “our” in this privacy policy).
        </p>
        <h3 class="text-4xl font-bold my-5">Linking to and from www.k9jets.com</h3>
        <p>
            Where our Site contains links to other third-party Websites and resources, these links are provided for your
            information only. We have no control over the contents of those Sites or resources and accept no
            responsibility for them or for any loss or damage that may arise from your use of them.
        </p>
        <h3 class="text-4xl font-bold my-5">Contact details</h3>
        <p>
            For any questions you may have about this Privacy Policy or any issue regarding our use of your personal
            data, please contact K9 Jets by email at <a href="" class="text-red-700">fly@k9jets.com</a> or by
            post at K9 Jets Grosvenor House, 11 St Pauls
            Square, Birmingham, B3 1RB or by telephone +44 (0)121 291 5463.
            <br><br>
            You have the right to make a complaint at any time to the Information Commissioner’s Office (ICO), the UK
            regulator for data protection issues (www.ico.org.uk). We would, however, appreciate the chance to deal with
            your concerns before you approach the ICO so please contact us in the first instance.
        </p>
        <h3 class="text-4xl font-bold my-5">Your duty to inform us of changes</h3>
        <p>
            We keep our privacy policy under regular review. This privacy policy was published on 28th November 2022 and
            historic versions can be obtained by contacting us.
            <br><br>
            It is important that the personal data we hold about you is accurate and current. Please keep us informed if
            your personal data changes during your relationship with us.
        </p>
        <h3 class="text-4xl font-bold my-5">Third-party links</h3>
        <p>
            This website may include links to third-party websites, plug-ins and applications. Clicking on those links
            or enabling those connections may allow third parties to collect or share data about you. We do not control
            these third-party websites and are not responsible for their privacy statements. When you leave our website,
            we encourage you to read the privacy policy of every website you visit.
        </p>
        <h3 class="text-4xl font-bold my-5">The data we collect about you</h3>
        <p>
            Personal data, or personal information, means any information about an individual from which that person can
            be identified. It does not include data where the identity has been removed (anonymous data).
            <br><br>
            We may collect, use, store and transfer different kinds of personal data about you which we have grouped
            together as follows:
            <br><br>
            <b>Identity Data</b> includes first name, maiden name, last name, title, job title, username or similar
            identifier,
            potentially your business /company name, marital status, gender (where required), passport or ID number and
            photo.
            <br><br>
            <b>Contact Data</b> includes billing address, postal address, email address and telephone numbers.
            <br><br>
            <b>Financial Data</b> includes bank account details and payment card details.
            <br><br>
            <b>Travel Data</b> includes information about your booking and travel itinerary and arrangements, revisions
            to
            booked arrangements, dietary requirements, special assistance that you may require, or other passengers
            travelling on your booking or connection with your travel itinerary, details of any travel, visa and work
            permit information where this is required by the authorities in any destination.
            <br><br>
            <b>Medical Data</b> includes details about any medical conditions or medical results that may be relevant to
            or
            affect your proposed journey, and / or your ability to travel between countries.
            <br><br>
            <b>Technical Data</b> includes [internet protocol (IP) address, your login data, browser type and version,
            time
            zone setting and location, browser plug-in types and versions, operating system and platform, and other
            technology on the devices you use to access this website.
            <br><br>
            <b>Usage Data</b> includes information about how you use our website, products and services.
            <br><br>
            <b>Profile Data</b> includes your quote requests and flight bookings, your interests, preferences, feedback
            and
            survey responses.
            <br><br>
            <b>Marketing and Communications Data</b> includes your preferences in receiving marketing from us and our
            third
            parties and your communication preferences.
            <br><br>
            We also collect, use and share <b>Aggregated Data</b> such as statistical or demographic data for any
            purpose.
            Aggregated Data could be derived from your personal data but is not considered personal data in law as this
            data will not directly or indirectly reveal your identity. For example, we may aggregate your Usage Data to
            calculate the percentage of users accessing a specific website feature. However, if we combine or connect
            Aggregated Data with your personal data so that it can directly or indirectly identify you, we treat the
            combined data as personal data which will be used in accordance with this privacy policy.
            <br><br>
            We may collect <b>Special Categories of Personal Data</b> about you (this includes details about your race
            or
            ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union
            membership, information about your health, and genetic and biometric data, any information about criminal
            convictions and offences) in order to perform the required services.
        </p>
        <h3 class="text-4xl font-bold my-5">If you fail to provide personal data</h3>
        <p>
            Where we need to collect personal data by law, or under the terms of a contract we have with you, and you
            fail to provide that data when requested, we may not be able to perform the contract we have or are trying
            to enter into with you (for example, to provide you with goods or services). In this case, we may have to
            cancel a product or service you have with us but we will notify you if this is the case at the time.
        </p>
        <h3 class="text-4xl font-bold my-5">How is your personal data collected?</h3>
        <p>
            We use different methods to collect data from and about you including through:
            <br><br>
            Direct interactions. You may give us your Identity, Contact, Financial, Travel or Medical Data by filling in
            forms or by corresponding with us by post, phone, email or otherwise. This includes personal data you
            provide when you:
            <br><br>
            ask for a quote for services;
            <br><br>
            apply for our products or services;
            <br><br>
            place an order for our services directly or through a third party;
            <br><br>
            create an account on our website;
            <br><br>
            subscribe to our service or publications;
            <br><br>
            request marketing to be sent to you; or
            <br><br>
            give us feedback or contact us.
            <br><br>
            Automated technologies or interactions. As you interact with our website, we will automatically collect
            Technical Data about your equipment, browsing actions and patterns. We collect this personal data by using
            cookies and other similar technologies.
            <br><br>
            Biometric Data. You should be aware that in some airports facial recognition and biometric technology is
            used to facilitate passenger boarding.
            <br><br>
            Third parties or publicly available sources. We will receive personal data about you from various third
            parties and public sources as set out below:
        </p>
        <ul class="list-disc p-10">
            <li class="py-2">Technical Data from analytics providers such as Google based outside the EU;</li>
            <li class="py-2">Contact, Financial and Transaction Data from providers of technical, payment and delivery
                services such
                as Thomas Reuters based inside and outside the EU; and</li>
            <li class="py-2">Identity and Contact Data from publicly available sources such as Companies House and the
                Electoral
                Register based inside the UK.</li>
        </ul>
        <h3 class="text-4xl font-bold my-5">How we use your personal data</h3>
        <p>
            We will only use your personal data when the law allows us to. Most commonly, we will use your personal data
            in the following circumstances:
        </p>
        <ul class="list-disc p-10">
            <li class="py-2">Where we need to perform the contract we are about to enter into or have entered into
                with you.</li>
            <li class="py-2">Where it is necessary for our legitimate interests (or those of a third party) and your
                interests and fundamental rights do not override those interests.</li>
            <li class="py-2">Where we need to comply with a legal or regulatory obligation.</li>
        </ul>
        <p>
            Generally, we do not rely on consent as a legal basis for processing your personal data although we will get
            your consent before sending third party direct marketing communications to you via email or text message.
            You have the right to withdraw consent to marketing at any time by contacting us.
        </p>
        <h3 class="text-4xl font-bold my-5">Purposes for which we will use your personal data</h3>
        <p>
            We have set out below, in a table format, a description of all the ways we plan to use your personal data,
            and which of the legal bases we rely on to do so. We have also identified what our legitimate interests are
            where appropriate.
            <br><br>
            Note that we may process your personal data for more than one lawful ground depending on the specific
            purpose for which we are using your data. Please contact us if you need details about the specific legal
            ground we are relying on to process your personal data where more than one ground has been set out in the
            table below.
        </p>
        <!-- component -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
                <div class="py-2 inline-block min-w-full">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-2xl">
                            <thead class="bg-white border-b">
                                <tr>
                                    <th scope="col" class="font-bold text-gray-900 px-6 py-4 text-left">
                                        Purpose/Activity
                                    </th>
                                    <th scope="col" class="font-bold text-gray-900 px-6 py-4 text-left">
                                        Type of data
                                    </th>
                                    <th scope="col" class="font-bold text-gray-900 px-6 py-4 text-left">
                                        Lawful basis for processing including basis of legitimate interest
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-gray-100 border-b">
                                    <td class="px-6 py-4  text-gray-900">To
                                        register you as a new customer</td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Identity <br>
                                        (b) Contact
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        Performance of a contract with you for the request for our services. <br><br>
                                        Necessary for our legitimate interests (to ensure we retain accurate records
                                        relating to you and to performance of engagements for our services (including
                                        enquiries made for our services)
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4  text-gray-900">To manage our relationship
                                        with you which will include: <br>
                                        (a) Notifying you about changes to our terms or privacy policy <br>
                                        (b) Asking you to leave a review or take a survey <br>
                                        (c) validating your provided information</td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Identity <br>
                                        (b) Contact <br>
                                        (c) Profile <br>
                                        (d) Marketing and Communications
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Performance of a contract with you <br>
                                        (b) Necessary to comply with a legal obligation <br>
                                        (c) Necessary for our legitimate interests (to keep our records updated and to
                                        study how customers use our products/services)
                                    </td>
                                </tr>
                                <tr class="bg-gray-100 border-b">
                                    <td class="px-6 py-4  text-gray-900">To manage our relationship
                                        with you which will include: <br> (a) Notifying you about changes to our terms
                                        or
                                        privacy policy <br> (b) Asking you to leave a review or take a survey</td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Identity <br>
                                        (b) Contact <br>
                                        (c) Profile <br>
                                        (d) Marketing and Communications
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Performance of a contract with you <br> (b) Necessary to comply with a legal
                                        obligation <br> (c) Necessary for our legitimate interests (to keep our records
                                        updated and to study how customers use our products/services)
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4  text-gray-900">
                                        To administer and protect our business and this website (including
                                        troubleshooting, data analysis, testing, system maintenance, support, reporting
                                        and hosting of data)
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Identity <br>
                                        (b) Contact <br>
                                        (c) Technical
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Necessary for our legitimate interests (for running our business, provision
                                        of administration and IT services, network security, to prevent fraud and in the
                                        context of a business reorganisation or group restructuring exercise) <br>
                                        (b) Necessary to comply with a legal obligation
                                    </td>
                                </tr>
                                <tr class="bg-gray-100 border-b">
                                    <td class="px-6 py-4  text-gray-900">
                                        To deliver relevant website content and advertisements to you and measure or
                                        understand the effectiveness of the advertising we serve to you
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Identity <br>
                                        (b) Contact <br>
                                        (c) Profile <br>
                                        (d) Usage <br>
                                        (e) Marketing and Communications <br>
                                        (f) Technical
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        Necessary for our legitimate interests (to study how customers use our
                                        products/services, to develop them, to grow our business and to inform our
                                        marketing strategy)
                                    </td>
                                </tr>
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4  text-gray-900">
                                        To use data analytics to improve our website, products/services, marketing,
                                        customer relationships and experiences
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Technical <br>
                                        (b) Usage
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        Necessary for our legitimate interests (to define types of customers for our
                                        products and services, to keep our website updated and relevant, to develop our
                                        business and to inform our marketing strategy)
                                    </td>
                                </tr>
                                <tr class="bg-gray-100 border-b">
                                    <td class="px-6 py-4  text-gray-900">
                                        To make suggestions and recommendations to you about goods or services that may
                                        be of interest to you
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        (a) Identity <br>
                                        (b) Contact <br>
                                        (c) Technical <br>
                                        (d) Usage <br>
                                        (e) Profile <br>
                                        (f) Marketing and Communications
                                    </td>
                                    <td class=" text-gray-900 px-6 py-4">
                                        Necessary for our legitimate interests (to develop our products/services and
                                        grow our business)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="text-4xl font-bold my-5">Marketing</h3>
        <p>We strive to provide you with choices regarding certain personal data uses, particularly around marketing and
            advertising. We have established the following personal data control mechanisms:</p>
        <p class="py-5"><b>Promotional offers from us</b></p>
        <p>
            We may use your Identity, Contact, Technical, Usage and Profile Data to form a view on what we think you may
            want or need, or what may be of interest to you. This is how we decide which products, services and offers
            may be relevant for you (we call this marketing).
            <br><br>
            You will receive marketing communications from us if you have requested information from us or purchased
            broker services from us and you have not opted out of receiving that marketing.
        </p>
        <p class="py-5"><b>Opting out</b></p>
        <p>
            You can ask us or third parties to stop sending you marketing messages at any by contacting us at any time.
            <br><br>
            Where you opt out of receiving these marketing messages, this will not apply to personal data provided to us
            as a result of our provision of broker services to you.
        </p>
        <h3 class="text-4xl font-bold my-5">Change of purpose</h3>
        <p>
            We will only use your personal data for the purposes for which we collected it, unless we reasonably
            consider that we need to use it for another reason and that reason is compatible with the original purpose.
            If you wish to get an explanation as to how the processing for the new purpose is compatible with the
            original purpose, please contact us.
            <br><br>
            If we need to use your personal data for an unrelated purpose, we will notify you and we will explain the
            legal basis which allows us to do so.
            <br><br>
            Please note that we may process your personal data without your knowledge or consent, in compliance with the
            above rules, where this is required or permitted by law.
        </p>
        <h3 class="text-4xl font-bold my-5">Disclosures of your personal data</h3>
        <p>
            We may share your personal data with the parties set out below for the purposes set out in the table
            Purposes for which we will use your personal data above.
            <br><br>
            External Third Parties in order to perform the required services.
            <br><br>
            Third parties to whom we may choose to sell, transfer or merge parts of our business or our assets.
            Alternatively, we may seek to acquire other businesses or merge with them. If a change happens to our
            business, then the new owners may use your personal data in the same way as set out in this privacy policy.
            <br><br>
            We require all third parties to respect the security of your personal data and to treat it in accordance
            with the law. We do not allow our third-party service providers to use your personal data for their own
            purposes and only permit them to process your personal data for specified purposes and in accordance with
            our instructions.
        </p>
        <h3 class="text-4xl font-bold my-5">International transfers</h3>
        <p>
            We may need to share your personal data with third party Operators or other professional advisors with whom
            it is necessary to share your personal data in order to provide you with the services we have contracted
            with you for. This may involve transferring your data outside the European Economic Area (EEA).
            <br><br>
            Whenever we transfer your personal data out of the EEA, we ensure a similar degree of protection is afforded
            to it by ensuring at least one of the following safeguards is implemented:
        </p>
        <ul class="list-disc p-10">
            <li class="py-2">We will only transfer your personal data to countries that have been deemed to provide
                an adequate level of protection for personal data. For further details, see European Commission:
                Adequacy of the protection of personal data in non-EU countries.</li>
            <li class="py-2">Where we use certain service providers, we may use specific contracts approved by the
                European Commission which give personal data the same protection it has in Europe. For further details,
                see European Commission: Model contracts for the transfer of personal data to third countries. </li>
            <li class="py-2">
                Where we use providers based in the US, we may transfer data to them if they are part of the Privacy
                Shield which requires them to provide similar protection to personal data shared between the Europe and
                the US. For further details, see European Commission: EU-US Privacy Shield.
            </li>
            <p>
                Please contact us if you want further information on the specific mechanism used by us when transferring
                your personal data out of the UK.
            </p>
        </ul>
        <h3 class="text-4xl font-bold my-5">Data security</h3>
        <p>
            We have put in place appropriate security measures to prevent your personal data from being accidentally
            lost, used or accessed in an unauthorised way, altered or disclosed. In addition, we limit access to your
            personal data to those employees, agents, contractors and other third parties who have a business need to
            know. They will only process your personal data on our instructions and they are subject to a duty of
            confidentiality.
            <br><br>
            We have put in place procedures to deal with any suspected personal data breach and will notify you and any
            applicable regulator of a breach where we are legally required to do so.
        </p>
        <h3 class="text-4xl font-bold my-5">How long will you use my personal data for?</h3>
        <p>
            We will only retain your personal data for as long as reasonably necessary to fulfil the purposes we
            collected it for, including for the purposes of satisfying any legal, regulatory, tax, accounting or
            reporting requirements. We may retain your personal data for a longer period in the event of a complaint or
            if we reasonably believe there is a prospect of litigation in respect to our relationship with you.
            <br><br>
            To determine the appropriate retention period for personal data, we consider the amount, nature and
            sensitivity of the personal data, the potential risk of harm from unauthorised use or disclosure of your
            personal data, the purposes for which we process your personal data and whether we can achieve those
            purposes through other means, and the applicable legal, regulatory, tax, accounting or other requirements.
            <br><br>
            In some circumstances you can ask us to delete your data: see your legal rights below for further
            information.
            <br><br>
            In some circumstances we will anonymise your personal data (so that it can no longer be associated with you)
            for research or statistical purposes, in which case we may use this information indefinitely without further
            notice to you.
        </p>
        <h3 class="text-4xl font-bold my-5">Your legal rights</h3>
        <p>
            Under certain circumstances, you have rights under data protection laws in relation to your personal data:
            <br><br>
            <i>Request access to your personal data.</i>
            <br><br>
            <i>Request correction of your personal data.</i>
            <br><br>
            <i>Request erasure of your personal data.</i>
            <br><br>
            <i>Object to processing of your personal data.</i>
            <br><br>
            <i>Request restriction of processing your personal data.</i>
            <br><br>
            <i>Request transfer of your personal data.</i>
            <br><br>
            <i>Right to withdraw consent.</i>
            <br><br>
            If you wish to exercise any of the rights set out above, please contact us.
        </p>
        <h3 class="text-4xl font-bold my-5">No fee usually required</h3>
        <p>
            You will not have to pay a fee to access your personal data (or to exercise any of the other rights).
            However, we may charge a reasonable fee if your request is clearly unfounded, repetitive or excessive.
            Alternatively, we could refuse to comply with your request in these circumstances.
        </p>
        <h3 class="text-4xl font-bold my-5">What we may need from you</h3>
        <p>
            We may need to request specific information from you to help us confirm your identity and ensure your right
            to access your personal data (or to exercise any of your other rights). This is a security measure to ensure
            that personal data is not disclosed to any person who has no right to receive it. We may also contact you to
            ask you for further information in relation to your request to speed up our response.
        </p>
        <h3 class="text-4xl font-bold my-5">Time limit to respond</h3>
        <p>
            We try to respond to all legitimate requests within one month. Occasionally it could take us longer than a
            month if your request is particularly complex or you have made a number of requests. In this case, we will
            notify you and keep you updated.
        </p>
        <h3 class="text-4xl font-bold my-5">Glossary</h3>
        <h4 class="text-3xl font-bold my-5">LAWFUL BASIS</h4>
        <p>
            <b>Legitimate Interest</b> means the interest of our business in conducting and managing our business to
            enable us
            to give you the best service/product and the best and most secure experience. We make sure we consider and
            balance any potential impact on you (both positive and negative) and your rights before we process your
            personal data for our legitimate interests. We do not use your personal data for activities where our
            interests are overridden by the impact on you (unless we have your consent or are otherwise required or
            permitted to by law). You can obtain further information about how we assess our legitimate interests
            against any potential impact on you in respect of specific activities by contacting us.
            <br><br>
            <b>Performance of Contract</b> means processing your data where it is necessary for the performance of a
            contract
            to which you are a party or to take steps at your request before entering into such a contract.
            <br><br>
            <b>Comply with a legal obligation</b> means processing your personal data where it is necessary for
            compliance with
            a legal obligation that we are subject to.
        </p>
        <h4 class="text-3xl font-bold my-5">THIRD PARTIES</h4>
        <p class="my-5">
            <b>External Third Parties</b>
        </p>
        <p>
            Service providers acting as processors based within the EEA who provide IT and system administration
            services.
            <br><br>
            Third parties that provide travel assistance such as but not limited to companies that provide ground
            transportation services, ground handling, catering, customs and immigration authorities.
            <br><br>
            Professional advisers and aviation professions acting as processors or joint controllers including lawyers,
            bankers, auditors, insurers, aviation agents or brokers based both in the EEA and outside the EEA who
            provide consultancy, banking, legal, insurance and accounting services.
            <br><br>
            The air operators or carriers acting as processors based both in the EEA and outside the EEA.
            <br><br>
            HM Revenue & Customs, regulators and other authorities based in the United Kingdom who require reporting of
            processing activities in certain circumstances. Depending on the nature of the broker services we are
            providing to you, the regulators or other authorities may be based both inside or outside the EEA. Fraud
            prevention agencies or other providers of services utilised for the purposes of detecting or preventing
            fraud, ensuring compliance with anti-money laundering, bribery or corruption legislation or otherwise
            assisting us in conducting necessary due diligence required of us by professional rules of conduct or other
            relevant laws.
        </p>
        <h4 class="text-3xl font-bold my-5">YOUR LEGAL RIGHTS</h4>
        <p>
            You have the right to:
            <br><br>
            <b>Request access</b> to your personal data (commonly known as a “data subject access request”). This enables you
            to receive a copy of the personal data we hold about you and to check that we are lawfully processing it.
            <br><br>
            <b>Request correction</b> of the personal data that we hold about you. This enables you to have any incomplete or
            inaccurate data we hold about you corrected, though we may need to verify the accuracy of the new data you
            provide to us.
            <br><br>
            <b>Request erasure</b> of your personal data. This enables you to ask us to delete or remove personal data where
            there is no good reason for us continuing to process it. You also have the right to ask us to delete or
            remove your personal data where you have successfully exercised your right to object to processing (see
            below), where we may have processed your information unlawfully or where we are required to erase your
            personal data to comply with local law. Note, however, that we may not always be able to comply with your
            request of erasure for specific legal reasons which will be notified to you, if applicable, at the time of
            your request.
            <br><br>
            <b>Object to processing</b> of your personal data where we are relying on a legitimate interest (or those of a
            third party) and there is something about your particular situation which makes you want to object to
            processing on this ground as you feel it impacts on your fundamental rights and freedoms. You also have the
            right to object where we are processing your personal data for direct marketing purposes. In some cases, we
            may demonstrate that we have compelling legitimate grounds to process your information which override your
            rights and freedoms.
            <br><br>
            <b>Request restriction of processing</b> of your personal data. This enables you to ask us to suspend the
            processing of your personal data in the following scenarios:
            <br><br>
            If you want us to establish the data’s accuracy.
            <br><br>
            Where our use of the data is unlawful but you do not want us to erase it.
            <br><br>
            Where you need us to hold the data even if we no longer require it as you need it to establish, exercise or
            defend legal claims.
            <br><br>
            You have objected to our use of your data but we need to verify whether we have overriding legitimate
            grounds to use it.
            <br><br>
            <b>Request the transfer</b> of your personal data to you or to a third party. We will provide to you, or a third
            party you have chosen, your personal data in a structured, commonly used, machine-readable format. Note that
            this right only applies to automated information which you initially provided consent for us to use or where
            we used the information to perform a contract with you.
            <br><br>
            <b>Withdraw consent at any time</b> where we are relying on consent to process your personal data. However, this
            will not affect the lawfulness of any processing carried out before you withdraw your consent. If you
            withdraw your consent, we may not be able to provide certain products or services to you. We will advise you
            if this is the case at the time you withdraw your consent.
        </p>
    </div>

    <footer class="grid grid-cols-1 md:grid-cols-4 gap-4 border-t-2 container py-8">
        <!-- satu -->
        <div>
            <img style="width: 150px" src="../assets/logo-black.png" alt="" />
        </div>
        <!-- dua -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('about') }}">About</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('howitworks') }}">How it
                    Works</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('aircraft') }}">Aircraft</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('wtf') }}">Where We Fly</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('contact') }}">Contact</a></p>
        </div>
        <!-- tiga -->
        <!-- empat -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('agreement') }}">Participant
                    Agreement</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('terms') }}">Cookie Policy</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('terms') }}">Terms and
                    Condition</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('privacy') }}">Privacy
                    Policy</a></p>
        </div>
        <!-- lima -->
        <div>
            <h1 class="text-gray-800 font-semibold text-lg">Follow Us</h1>
            <div class="flex py-2">
                <a href="https://www.facebook.com/"><img class="pr-2" src="../assets/facebook.svg"
                        alt="" /></a>
                <a href="https://twitter.com/"><img class="px-2" src="../assets/twitter.svg" alt="" /></a>
                <a href="https://instagram.com/"><img class="px-2" src="../assets/instagram.svg"
                        alt="" /></a>
                <a href="https://linkedin.com/"><img class="px-2" src="../assets/linkedin.svg"
                        alt="" /></a>
            </div>
        </div>
    </footer>
    <!-- copyrgith -->
    <div class="border-t-2 container py-8">
        <h1 class="text-center text-gray-500">
            ©{{ date('Y') }} Xi Aviation, Inc. All Rights Reserved.
        </h1>
    </div>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tiketScript.js') }}"></script>

</body>

</html>
