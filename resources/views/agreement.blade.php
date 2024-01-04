<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Agreement | Xi Aviation</title>
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
            <h2 class="font-bold text-white text-4xl md:text-5xl">Agreement</h2>
        </div>
    </div>
    <div class="container py-10">
        <h3 class="text-4xl font-bold">1. General</h3>
        <p class="text-2xl my-5">When you purchase a seat on a K9 Jets flight, a contract is made and each party has
            certain rights and
            obligations as set forth below. K9 Jets Ltd, with an office at Grosvenor House, 11 St Pauls Square,
            Birmingham, United Kingdom, B3 1RB, is the authorized Public Charter operator (“PCO”). The price of your
            trip, dates of the outbound and return flights, origin and destination cities, and other conditions, are as
            specified in the applicable PCO itinerary and/or your accepted reservation and are incorporated herein by
            reference. Unless otherwise specified, the price includes only air transportation.</p>
        <h3 class="text-4xl font-bold">2. Reservations & Payments</h3>
        <p class="text-2xl my-5">Reservations may be made directly with PCO. Within seven days of receiving your
            reservation request, PCO will review your travel document and pet details. If everything is to PCO’s
            satisfaction, you will be notified that your payment has been accepted and your reservation confirmed.
            Unless and until full payment has been received, you do not have a confirmed reservation. If there is an
            issue with your travel details, you will receive a notification and phone call advising that your
            reservation is canceled. Your payment is transmitted directly to PCO’s public charter depository (escrow)
            account at Central Bank & Trust, 1 South Nevada Avenue, Suite 203, Colorado Springs, CO 80903 (719)
            228-1080. Your payment is additionally protected in part by a security agreement between PCO and ACSTAR
            Insurance Company, 30 South Road, Farmington, CT 06032. Unless you file a claim with PCO, or if PCO is
            unavailable, with ACSTAR Insurance Company within sixty (60) days of arrival (or in the case of a canceled
            charter, the intended date of arrival) of the last flight of your itinerary, ACSTAR Insurance Company shall
            be released from all liability to you under the security agreement.</p>
        <h3 class="text-4xl font-bold">3. Air Transportation</h3>
        <p class="text-2xl my-5">PCO flights are operated by Pegasus Elite Aviation, or a similarly situated air
            carrier, using Gulfstream G-IV/G-IVSP aircraft seating up to ten (10) passengers or similar aircraft.
            Pegasus Elite Aviation supplies air transportation subject to all applicable laws and regulations governing
            the provision of commercial air transportation. PCO and Pegasus Elite Aviation reserve the right to
            substitute another duly licensed carrier and/or to change the aircraft type, capacity, and routing; no
            refund will be given for such substitutions or changes. Additionally, and subject to the provisions of this
            contract governing “Major Changes,” PCO reserves the right to change the form of service from charter flight
            to scheduled flight and vice versa. Consumer protections afforded Public Charter passengers will apply only
            to those passengers who actually travel on a Public Charter flight. Passengers who actually travel on
            scheduled flights will receive only the consumer protections applicable to scheduled service. Tickets issued
            or procured by PCO are neither endorsable to other carriers nor usable on other routes of the same carrier.
            Flight dates and times are not guaranteed.</p>
        <h3 class="text-4xl font-bold">4. Check-In Information</h3>
        <p class="text-2xl my-5">Please refer to your itinerary for check-in information. Passengers must present
            themselves for check-in at least sixty (60) minutes prior to scheduled departure time. If you are not
            present at the boarding area at least thirty (30) minutes prior to scheduled departure, you will be
            considered a “no-show;” and your seat may be sold to a standby passenger. In such event, neither PCO nor
            Pegasus Elite Aviation shall be responsible or liable for your transportation. Please refer to Paragraph 6
            below for additional information on no-shows.</p>
        <h3 class="text-4xl font-bold">5. Cancellations by PCO, Price Terms and Major Changes</h3>
        <p class="text-2xl my-5">PCO reserves the right to cancel a trip for any reason, provided PCO notifies you in
            writing within seven (7) days after the cancellation occurs but no later than ten (10) days before the
            scheduled departure date. A full refund will be made within twenty-eight (28) days after such cancellation.
            PCO WILL NOT CANCEL A TRIP LESS THAN TEN (10) DAYS BEFORE DEPARTURE EXCEPT FOR CIRCUMSTANCES THAT MAKE IT
            PHYSICALLY IMPOSSIBLE TO PERFORM THE TRIP. If such a circumstance occurs, PCO will notify you as soon as
            possible; and if the trip is cancelled, PCO will refund all monies within fourteen (14) days. IF PCO MAKES A
            PRE-DEPARTURE “MAJOR CHANGE” TO A TRIP, YOU MAY CANCEL UP TO TWENTY-FOUR (24) HOURS BEFORE DEPARTURE AND
            RECEIVE A FULL REFUND WITHIN FOURTEEN (14) DAYS AFTER CANCELLATION. Only the following constitute “major
            changes:” (i) a change in the departure or return date unless the change results from a flight delay
            experienced by the air carrier, although a delay of longer than forty-eight (48) hours will always be
            considered a “major change;” (ii) a change in the origin or destination city; or (iii) a price increase of
            more than ten (10) percent occurring ten (10) or more days before departure. If a “major change” occurs, PCO
            will notify you within seven (7) days after learning of the change but at least ten (10) days before the
            scheduled departure. If PCO first knows of the “major change” less than ten (10) days before departure, PCO
            will notify you as soon as possible. IF A “MAJOR CHANGE” WHICH YOU ARE UNWILLING TO ACCEPT OCCURS AFTER YOUR
            OUTBOUND FLIGHT HAS BEEN COMPLETED, PCO WILL REFUND, WITHIN FOURTEEN (14) DAYS AFTER YOUR SCHEDULED RETURN
            DAY, THAT PORTION OF YOUR PAYMENT WHICH APPLIES TO THE SERVICE NOT PROVIDED.</p>
        <h3 class="text-4xl font-bold">6. Passenger Cancellations, Itinerary Changes and Refunds</h3>
        <p class="text-2xl my-5">IF YOU CANCEL OR CHANGE A CONFIRMED RESERVATION, OR IF YOU “NO SHOW” FOR A FLIGHT, YOUR
            RIGHT TO A REFUND IS LIMITED AS FOLLOWS: All confirmed reservations are nonrefundable. If you cancel or
            change your reservation, no refund will be due. If you “no show” for a flight, we will consider that a
            passenger cancellation; and no refund will be due. Any refund, if applicable, will be made within fourteen
            (14) days after the date of cancellation. If, at time of cancellation, a passenger provides a substitute
            participant utilizing the same itinerary, or if PCO provides the substitute, a full refund less a $25
            administrative fee will be provided. PCO shall not be deemed to have provided a substitute participant
            unless all seats on the flight have been initially sold out. </p>
        <h3 class="text-4xl font-bold">7. Baggage Allowance and Liability</h3>
        <p class="text-2xl my-5">Checked baggage allowance is 20kg per paying passenger for all trips. Each passenger
            also may carry one carry-on bag and one personal item in the aircraft cabin. TSA requires that passengers
            are allowed to bring one small bag of liquids, aerosols, gels, creams, and pastes through the checkpoint
            with your carry-on bag. These are limited to 3.4 ounces or less per container. Any overweight or oversized
            luggage (larger than suitcase size) will be carried, if at all, subject to load restrictions and possible
            additional charges. PCO and Pegasus Elite Aviation neither assume nor accept liability for lost, delayed, or
            damaged bags, except as provided in the terms and conditions of the respective carrier’s applicable tariff
            and/or contract of carriage and as provided by applicable law or international treaty.</p>
        <h3 class="text-4xl font-bold">8. Responsibility</h3>
        <p class="text-2xl my-5">PCO is the principal and is responsible for making arrangements to provide the services
            included in the trip. In all cases, transportation is subject to all the terms and conditions of the
            respective carrier’s applicable tariff and/or contract of carriage; in the case of scheduled airline
            service, refer to the air transportation ticket for conditions of carriage and notice of incorporated terms,
            and inquire of the airline for additional details. Airlines and other travel suppliers are not agents or
            employees of PCO but are independent contractors over whom PCO has no control. Accordingly, you hereby agree
            that, except as otherwise provided herein, PCO is not responsible or liable for any loss, injury, expense,
            damage to property or personal sickness, injury, or death to you, or any animal you transport on a flight,
            that results directly or indirectly from (a) an act or omission of any air carrier or other travel supplier,
            or (b) any other cause or act, of whatsoever nature, beyond the direct and immediate control of PCO. You are
            responsible for any damage to the aircraft caused by you or any animal you transport on a flight, and you
            shall indemnify and hold harmless PCO from any such damage. Except as otherwise specified herein, in the
            event of non-operation of any flight due to reasons beyond the control of PCO, PCO’s sole liability shall be
            to refund to you that portion of the price allocable to the services not provided. Any deviation from the
            trip that you initiate is solely your responsibility.
            <br><br>
            PCO shall not be liable for any damage, loss, expense, or other irregularity caused by the defect of any
            vehicle or conveyance, or the acts, omissions, or negligence of any air carrier or other third-party engaged
            in conveying the participant or carrying out the arrangements for any trip.
            <br><br>
            Any Flight may be governed by the International Convention for the Unification of Certain Rules Relating to
            International Carriage by Air as amended (the “Warsaw Convention”) as amended and supplemented and/or by the
            rules and regulations established by the Montreal Convention on the Unification of Certain Rules for
            International Carriage signed in Montreal on 28th May 1999 (“the Montreal Convention”) which rules and
            limitations shall, to the extent such Warsaw Convention and/or the Montreal Convention is/are applicable,
            apply to any Flight(s) conducted by the air carrier.
        </p>
        <h3 class="text-4xl font-bold">9. Identification and Travel Documents</h3>
        <p class="text-2xl my-5">YOU MUST PRESENT GOVERNMENT-ISSUED PHOTO IDENTIFICATION BEFORE BOARDING; SUCH IDENTITY
            DOCUMENT SHOULD MATCH YOUR NAME AS IT APPEARS ON THE PASSENGER RESERVATION LIST. FAILURE TO PROVIDE THIS
            TYPE OF IDENTIFICATION COULD LEAD TO DELAY IN BOARDING OR TO DENIAL OF BOARDING. PLEASE BE SURE TO HAVE SUCH
            IDENTIFICATION AND ALL REQUIRED TRAVEL DOCUMENTS READY WHEN YOU CHECK IN. You are responsible for obtaining
            all necessary travel documents (passport, visa, tourist card, immunization certificate, and any other
            documents as required) and for complying with the laws of each country from, through, or to which you
            receive transportation. You agree to indemnify PCO for any loss, damage, or expense suffered or incurred by
            reason of your failure to comply with this Section 9.</p>
        <h3 class="text-4xl font-bold">10. Force Majeure</h3>
        <p class="text-2xl my-5">The PCO shall have no liability or responsibility for any failure or delay in the
            performance of its obligations under this agreement due directly or indirectly to Force Majeure. A Force
            Majeure means other than the lack of the availability of adequate financial resources, any events,
            circumstances or causes beyond the party’s reasonable control including but not limited to the following:
            acts of God, flood, earthquake, windstorm or other natural disaster; quarantine, epidemic or pandemic, Crew
            sickness; terrorist attack, civil war, civil commotion or riots, war, threat of or preparation for war,
            armed conflict, imposition of sanctions, embargo, or breaking off of diplomatic relations; nuclear, chemical
            or biological contamination or sonic boom; compliance with any law or governmental order, rule, regulation
            or direction, or any action taken by a government or public authority, including but not limited to imposing
            an embargo, export or import restriction, quota or other restriction or prohibition, or failing to grant a
            necessary license or consent; fire, explosion or accidental damage; adverse weather conditions; interruption
            or failure of utility service, including but not limited to electric power, fuel or gas; non-performance by
            suppliers or subcontractors; and any labour or trade dispute, strikes, industrial action or lockouts. If a
            flight cannot be performed or completed due to a Force Majeure event, the PCO sole obligation will be to
            refund to you any amount of money paid in connection with a canceled flight. Notwithstanding the foregoing,
            PCO WILL NOT CANCEL A TRIP LESS THAN TEN (10) DAYS BEFORE DEPARTURE, EXCEPT FOR CIRCUMSTANCES THAT MAKE IT
            PHYSICALLY IMPOSSIBLE TO PERFORM THE TRIP.</p>
        <h3 class="text-4xl font-bold">11. Notices</h3>
        <p class="text-2xl my-5">All communication should be sent to PCO at the address shown in Paragraph 1 above, or
            booking@k9jets.com. Notices to PCO are effective upon actual receipt by PCO.</p>
        <h3 class="text-4xl font-bold">12. Applicable Law</h3>
        <p class="text-2xl my-5">This contract is governed by and shall be construed under the laws of the State of New
            Jersey.</p>
        <h3 class="text-4xl font-bold">13. Miscellaneous</h3>
        <p class="text-2xl my-5">PCO reserves the right to amend this contract without notice to the passenger so long
            as such amendment is in compliance with applicable governmental regulations or waivers thereof. THE RIGHTS
            AND REMEDIES MADE AVAILABLE UNDER THIS CONTRACT ARE IN ADDITION TO ANY OTHER RIGHTS OR REMEDIES AVAILABLE
            UNDER APPLICABLE LAW; HOWEVER, ACCEPTANCE OF A REFUND FURNISHED UNDER THIS CONTRACT SHALL CONSTITUTE A
            WAIVER OF SUCH OTHER RIGHTS AND REMEDIES. PARTICIPANT AGREES THAT UNDER NO CIRCUMSTANCES SHALL PCO BE LIABLE
            TO PARTICIPANT FOR ANY INDIRECT, INCIDENTAL, CONSEQUENTIAL, SPECIAL, EXEMPLARY, OR PUNITIVE DAMAGES IN
            CONNECTION WITH THIS AGREEMENT, WHETHER IN CONTRACT OR TORT (INCLUDING STRICT LIABILITY AND NEGLIGENCE)
            INCLUDING LOSS OF REVENUE, LOSS OF USE, OR ANTICIPATED PROFITS.</p>
        <h3 class="text-4xl font-bold">14. Insurance</h3>
        <p class="text-2xl my-5">Trip cancellation, health, and accident insurance is available for purchase by all
            passengers from third-party vendors. Options for such insurance can be sent to you upon request.</p>
        <h3 class="text-4xl font-bold">15. Operational Control</h3>
        <p class="text-2xl my-5">The air carrier shall be responsible for the operation of the aircraft and the safe
            performance of each flight and shall retain full operational control and possession of the aircraft to
            enable it to do so. The captain of the aircraft has absolute discretion as to when and whether any flight
            should be undertaken and when and whether the aircraft should be landed and whether or not he or she refuses
            to transport any passenger, baggage, animal or cargo. The passenger agrees to accept all decisions made by
            the captain and hereby shall waives all claims against the operator, the PCO and their respective servants
            and agents for any loss, damage or costs of any nature and in any way that arise, whether in contract or
            tort or otherwise as a result of such decision, except that PCO’s sole liability shall be to refund to you
            that portion of the price allocable to the services not provided.
            <br><br>
            In the event that you are refused entry at any arrival airport, you shall indemnify and keep indemnified the
            PCO, against any and all liabilities, costs, expenses, damages and losses (including but not limited to any
            direct, indirect or consequential losses, loss of profit, loss of reputation and all interest, penalties and
            legal costs and all other reasonable professional costs and expenses) incurred by the PCO in respect of any
            arrangements made by the air carrier and/or the PCO to return you to the country from which were originally
            carried.
            <br><br>
            Neither party may assign this contract without the express written consent of the other party.
            <br><br>
            Participant hereby represents, warrants, and agrees that: (i) Participant is not a sanctioned individual,
            Designated Party, or otherwise the subject or target of any economic, export, or trade sanction law, or
            regulation or travel ban, or is or could be designated as a terrorist, a foreign terrorist organization, an
            organization that assists or provides support to a foreign terrorist organization, a proliferator of weapons
            of mass destruction, a narcotics trafficker, or any other similar designation that would prohibit
            Participant from transacting with PCO under applicable law; (ii) Participant will promptly notify PCO in
            writing should it know, or have reason to know, of any change or potential change in status under this
            provision; (iii) funds paid to PCO by Participant are not derived from illegal acts; and (iv) PCO may be
            required by law to block, freeze, and/or remit funds, which it will do without liability to Participant.
        </p>
        <p class="text-2xl my-5">Please see our <a href="{{ route('privacy') }}" class="text-red-700">Privacy Policy</a> for how we protect your personal data.</p>
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
