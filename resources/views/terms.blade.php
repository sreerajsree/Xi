<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@next"></script>
    <title>Terms & Conditions | Xi Aviation</title>
</head>

<body class="bg-white flex flex-col">
    <!-- nav white signed in -->
    @auth
        <nav id="regisWhite" class="flex py-8 px-24 justify-between sticky top-0 text-gray-700 bg-white">
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
            <h2 class="font-bold text-white text-4xl md:text-5xl">Terms & Conditions</h2>
        </div>
    </div>

    <div class="container py-10 text-2xl">
        <p>
            This page (along with the documents and pages referred to) advises you of the Terms of Use which you agree
            to when using www.k9jets.com. You agree to only use this Site for lawful purposes and in a manner that does
            not infringe the rights of, or restrict or inhibit the use and enjoyment of, this Site by any third party.
            <br><br>
            By using this Site, you indicate that you accept these Terms of Use and that you agree to abide by them. If
            you do not agree to these Terms of Use, please refrain from using our Site.
            <br><br>
            We recommend that you print a copy of these Terms for future reference.
            <br><br>
            We are registered in England and Wales as a Limited Company under Company No. 14254677 and have our
            Registered Office at Grosvenor House, 11 St Pauls Square, Birmingham, United Kingdom, B3 1RB. To contact us,
            please email – fly@k9jets.com.
            <br><br>
            These Terms of Use also include our Privacy Policy and Cookie Policy which can be found on the Site.
            <br><br>
            K9 JETS is a UK registered trademark. You are not permitted to use this without our prior written approval
            which may be withheld at our sole discretion.
        </p>
        <h3 class="text-4xl font-bold my-5">Revision to these Terms</h3>
        <p>
            We amend these Terms or the Website from at our sole discretion at any time. Such amendment or modification
            to be effective upon posting or publication of an updated version of these Terms of Use on the Application.
            Every time you wish to use our Website, please check these Terms to ensure you understand the Terms that
            apply at that time.
        </p>
        <h3 class="text-4xl font-bold my-5">Use of Material on our Site</h3>
        <p>
            This Website contains material which is owned by or licensed to K9 JETS and/or its partners/affiliates. This
            material includes but is not limited to, the design, layout, appearance, content and graphics. Reproduction
            is prohibited other than in accordance with the permissions given. All rights are reserved by K9 JETS.
            <br><br>
            You may print off one copy, and may download extracts, of any page(s) from our Site for your personal use
            only, and you may draw the attention of others within your organisation to content posted on our Site.
            <br><br>
            You must not modify the paper or digital copies of any materials you have printed off or downloaded in any
            way, and you must not use any illustrations, photographs, video or audio sequences or any graphics
            separately from any accompanying text.
            <br><br>
            The acknowledgement must be given to the source of the content from our Site. You must not use any part of
            the content from the Site for commercial purposes without obtaining prior written consent from K9 JETS to do
            so, which may be withheld at its sole discretion.
            <br><br>
            Any breach of these Terms of Use will result in K9 JETS immediately restricting your use of the Site.
            <br><br>
            This Site may include information and materials uploaded by other users of the Site to platforms such as,
            but not limited to, social media pages, video-sharing Websites, bulletin boards and chat rooms. These
            uploads represent views by other users of our Site only and have not been verified or approved by K9 JETS.
        </p>
        <h3 class="text-4xl font-bold my-5">Linking to and from www.k9jets.com</h3>
        <p>
            Where our Site contains links to other third-party Websites and resources, these links are provided for your
            information only. We have no control over the contents of those Sites or resources and accept no
            responsibility for them or for any loss or damage that may arise from your use of them.
        </p>
        <h3 class="text-4xl font-bold my-5">Viruses, hacking and other offences</h3>
        <p>
            You must not misuse our site by knowingly introducing viruses, trojans, worms, logic bombs or other material
            that is malicious or technologically harmful. You must not attempt to gain unauthorised access to our site,
            the server on which our site is stored, or any server, computer or database connected to our website. You
            must not attack our site via a denial-of-service attack or a distributed denial-of-service attack. By
            breaching this provision, you would commit a criminal offence under the Computer Misuse Act 1990. We will
            report any such breach to the relevant law enforcement authorities, and we will cooperate with those
            authorities by disclosing your identity to them.
            <br><br>
            We do not accept any responsibility for any loss, disruption or damage to your data or your computer system
            which may occur whilst using material derived from our site. Disclaimer and Indemnification
            <br><br>
            We do not guarantee that our Site, or any content on it, will always be available or be uninterrupted. We
            may suspend or withdraw or restrict the availability of all or any part of our Site for business and
            operational reasons. We will try to give you reasonable notice of any suspension or withdrawal.
            <br><br>
            You are also responsible for ensuring that all persons who access our Site through your internet connection
            are aware of these Terms of Use and other applicable Terms and Conditions and that they comply with them.
            <br><br>
            By entering into these Terms of Use, you agree that you shall defend, indemnify and hold K9 JETS, its
            affiliates, officers, directors, Users, employees, attorneys and agents harmless from and against any and
            all claims, costs, damages, losses, liabilities and expenses (including attorneys’ fees and costs) arising
            out of or in connection with: (a) your violation or breach of any term of these Terms of Use or any
            applicable law or regulation, whether or not referenced herein; (b) your violation of any rights of any
            third party, including providers of transportation services arranged via the Website, or (c) your use or
            misuse of the Website.
            <br><br>
            We don’t accept liability for loss or damage incurred by users of the Website, whether direct, indirect, or
            consequential, whether caused by tort, breach of contract or otherwise, in connection with our Site, its
            use, the inability to use, or results of the use of our Site, any Websites linked to it and any materials
            posted on it.
            <br><br>
            This does not affect our liability for death or personal injury arising from our gross negligence, nor our
            liability for fraudulent misrepresentation or negligent misrepresentation as to a fundamental matter, nor
            any other liability which cannot be excluded or limited under applicable law.
            <br><br>
            We reserve the right, without prior notice, at any time to remove or disable access to the site at our sole
            discretion where we believe a violation of these terms of use has occurred.
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
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="">Where We Fly</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('contact') }}">Contact</a></p>
        </div>
        <!-- tiga -->
        <!-- empat -->
        <div>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('agreement') }}">Participant
                    Agreement</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('cookie-policy') }}">Cookie Policy</a>
            </p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('terms') }}">Terms and
                    Condition</a></p>
            <p class="py-2 text-base text-gray-500 hover:underline"><a href="{{ route('privacy') }}">Privacy Policy</a></p>
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
