@extends('frontend.layout.home')
@section('title', 'Terms - obackpage')
@section('description', "obackpage is a site similar to backpage for posting ads if you also want to post your ads on this site then read terms of fbackpage and start posting your ads.")
@section('keywords', "terms of obackpage")
@section('content')

    <div class="">
        <div class="flex px-60">
            <div class="flex flex-col w-full p-4">
                <div class="flex justify-between w-full items-center">
                    <div id="items-center justify-start">
                        <span class="text-4xl italic font-sans font-bold leading-7 text-red-700">o</span><span class="text-4xl italic font-sans font-bold leading-7 text-gray-800">backpage</span>
                    </div>
                    <div class="justify-end">
                        @if (Route::has('login'))
                            @auth
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a href="{{ route('manage-ads') }}"><span class="text-sm text-gray-700 font-semibold dark:text-gray-700 underline">My Account</span></a>
                                    <button type="submit" class="ml-4 text-sm text-gray-700 font-semibold dark:text-gray-700 underline">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"><span class="text-sm text-gray-700 font-semibold  dark:text-gray-700 underline">Log in</span></a>
                                <a href="{{ route('login') }}"><span class="ml-4 text-sm text-gray-700 font-semibold dark:text-gray-700 underline">Register</span></a>
                            @endauth
                        @endif
                    </div>
                </div>
                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900">
                    <div id="items-center justify-start"></div>
                    @if (Route::has('login'))
                        @auth
                            <div class="justify-end">
                                <a href="{{ route('post-ad') }}" class="">
                                    <p class="text-lg text-red-700 font-bold dark:text-red-700 underline">Post ad</p>
                                </a>
                            </div>
                        @else
                            <div class="justify-end">
                                <a href="{{ route('login') }}" class="">
                                    <p class="text-lg text-red-700 font-bold dark:text-red-700 underline">Post ad</p>
                                </a>
                            </div>
                        @endauth
                    @endif
                </div>

                


            <div class="py-6">
            <span class="text-gray-800 text-2xl font-bold">Terms Condition</span><br><br><br>
            {{-- <p><strong>Updated April 28, 2021 <br><br>Objectives/Content:</strong></p> --}}
            <div class="font-bold text-base">Updated April 28, 2021 <br><br>Objectives/Content:</div><br>
            

            <div class="concls text-sm font-bold">
            <p>
                The Site reserves the privilege to alter the Terms at any time and for almost any reason. Updated
                versions of the Conditions will undoubtedly be submitted to the Site in <a class="text-gray-700 underline" href="{{route('home')}}">obackpage.com</a> and also
                you should visit this page periodically to keep apprised of any changes. By continuing to make
                use of the Site after any such change, you accept and agree on the modified Terms. You agree
                that the website will not be responsible for you personally or some other third party for
                practically any modification or discontinuance of the website.
            </p>
            <br><br>
            <div class="font-bold text-base">Consumer Conduct:</div><br>
            <p>Without restriction, you agree to refrain from the Subsequent activities when Using the Website:
            </p><br>
            <ol>
            <li>&emsp;1.&emsp;Harassing, threatening, embarrassing or causing distress or discomfort upon another
                individual or entity or impersonating any person or entity or otherwise restricting or
                inhibiting any other person from using or enjoying the Site;
            </li><br>
            <li>&emsp;2.&emsp;Transmitting any information, data, text, files, hyperlinks, software, chats,
                communication or other materials which is unlawful, false, misleading, dangerous,
                threatening, abusive, invasive of a person's privacy, harassing, defamatory, vulgar,
                disgusting, hateful or racially or otherwise objectionable, including without limitation
                material of Any Type or nature that encourages conduct that may constitute a criminal
                offense, give rise to civil liability or otherwise violate any applicable local, state,
                provincial, national, or international law or regulation, or promote the Usage of
                controlled materials;
            </li><br>
            <li>&emsp;3.&emsp;Posting advertising or solicitation in categories Which Is Not right, or posting the
                Identical thing or agency at more than 1 category or greater than once every 7 days, or
                posting the same advertisement in a Number of cities around the Website;
            </li><br>
            <li>&emsp;4.&emsp;Posting adult content or explicit adult material and some other content country to this
                law which applies.
            </li><br>
            <li>&emsp;5.&emsp;Composing, anyplace around the Site, obscene or lewd and lascivious graphics or photos
                which portray genitalia or actual or simulated sexual acts, or some other act which
                suggest or promote sexual acts or solicits sensual favor.
            </li><br>
            <li>&emsp;6.&emsp;Putting up any solicitation straight or at"coded" fashion for Absolutely Any illegal service
                exchanging sexual favors for money or other valuable consideration;
            </li><br>
            <li>&emsp;7.&emsp;Putting up any substance on the Website that exploits minors in any way;
            </li><br>
            <li>&emsp;8.&emsp;publishing any substance on the Site that in any way constitutes or aids in human trafficking.
            </li><br>
            <li>&emsp;9.&emsp;Posting any ad for products or services, use or sale of which can be illegal by any legislation or law;
            </li><br>
            <li>&emsp;10.&emsp;Supplying mail, e-mail, voice messages or faxes for solicitation of any other Item, or
                support to a user of the Website unless the consumer has given permission in their
                advertising or otherwise allowed contact for solicitation;
            </li><br>
            <li>&emsp;11.&emsp;Using any automated device, robot, spider, crawler, information mining instrument,
                software or routine to gain access, copy, or obtain any part of the Website unless
                expressly permitted by the Website;
            </li><br>
            <li>&emsp;12.&emsp;Gaining or trying to obtain unauthorized accessibility to non public regions of the
                website. In addition, if you Own a password into a Non Public Subject of the Site, you
                may not disclose to, or discuss with your password, either with any third parties or even
                utilize your password to unauthorized purposes;
            </li><br>
            <li>&emsp;13.&emsp;Attempting to decipher, decompile, disassemble or reverse engineer any of the software
                comprising or in any way creating all or any part of the Site; altering any meta data,
                copying or duplicating in any manner any of these articles; framing of or linking to any of
                the Site, its content or data accessible from the Site without the express written consent
                of representatives of the Website;
            </li><br>
            <li>&emsp;14.&emsp;Discriminating on the Basis of race, religion, national origin, sex, handicap, age, marital
                status, sexual orientation, or refers to such matters in any manner prohibited by
                legislation ;
            </li><br>
            <li>&emsp;15.&emsp;Posting any job ads separating the anti-discrimination conditions of the Immigration
                and Nationality Act or messages which violate any law or law, or any advertising which
                violate labor regulation of the country.
            </li><br>
            <li>&emsp;16.&emsp;Using the site in order to engage in or assist another person or entity to take part in
                fraudulent, abusive, manipulative or illegal activity.
            </li><br>
            <li>&emsp;17.&emsp;Posting Totally Free ads promoting links to commercial providers or web sites except in
                areas of the Website in which these advertisements are explicitly permitted;
            </li><br>
            <li>&emsp;18.&emsp;Putting up any material advertisements firearms that the use, carrying, or advertising
                which is prohibited by applicable national, state, or community authorities. You are
                solely responsible for complying with all laws and/or regulations related to this move of
                firearms under both pertinent regional, state and national laws. The transfer of guns is
                more significantly regulated and restricted, and also failure to strictly comply with all
                such legislation is a significant crime and might lead to criminal prosecution. All
                transports of guns, if or not, lease or loan, including private trades, ought to proceed via
                a licensed firearms dealer. Any exception to these legislation, such as for example air
                guns, accessories, knives, special antiques, and any weapon components which might
                well not require transport by a licensed trader.
            </li><br>
            </ol>
            <br>
            <div class="font-bold text-base">Usage of Supplies:</div><br>
            <p>
                Any messages or ads that you submit, transmit, or make available for viewing on public aspects
                of the website are going to be medicated since it is non-confidential and non-proprietary for
                your requirements personally. You understand and agree that any such ads and messages might
                be used from the website or our affiliates, without any review or approval by you, for just about
                any purpose whatsoever, and also in any medium, for example our publishing press, if any other
                . You grant the Site (and our affiliates) the irrevocable right to use and/or edit your ads and
                messages, without any review or approval by you, for almost any purpose whatsoever, including,
                without any limit, reproduction, disclosure, transmission, publication, broadcast, publishing,
                and advertising in any media in perpetuity without notice or reimbursement to you.
            </p><br>
            <div class="font-bold text-base">Fair Housing:</div><br>
            <p>
                Title VIII of the Civil Rights Act of 1968 (Fair Housing Act), as amended, prohibits
                discrimination in the sale, rental, and financing of dwellings, and at additional housing-related
                trades. The Site is not going to knowingly accept any real estate advertising which is in violation
                of any pertinent law.
            <br>
            <br>
                You acknowledge and agree you won't submit or post any advertising which discriminates based
                on race, color, national origin, religion, sex, sexual orientation, familial status or
                handicap/disability. If you see any posting or ad that discriminates based on any of the above
                things, you are invited, along with calling HUD, to report this ad or posting by clicking on
                the"Report this Ad" hyperlink located on your own advertising website. You know we shall
                possess the right, however maybe not the responsibility, to remove, edit or edit any advert.
            </p><br>
            <div class="font-bold text-base">Termination of Access:</div><br>
            <p>
                The Site has the right to terminate your access for virtually any reason if we feel you've breached
                the Terms in any manner. You agree not to hold the Site liable for such a conclusion, and also
                agree not to attempt to use the Website after conclusion.
            </p><br>
            <div class="font-bold text-base">No Third Party Beneficiaries:</div><br>
            <p>
                You agree , except as otherwise provided in this Terms of use, there shall be no third party
                beneficiaries to those Conditions.
            </p><br>
            <div class="font-bold text-base">Copyright and TradeMarks:</div><br>
            <p>
                All substances on the Site, including without limit, logos, images, text, illustrations, sound and
                video clip documents are protected by copyrights, trademarks, service marks, or other
                proprietary rights which are either owned by or certified into this website or owned by other
                parties that are posted on the Site. Materials by the website and from some other site owned,
                controlled, controlled, or licensed from the Site might not be duplicated, reproduced,
                republished, uploaded, posted, transmitted, or distributed in any way.
            <br>
            <br>
                In posting content on the Site, you grant the Site, and its owners and licensees, the best to use,
                reproduce, distribute, interpret, alter, adapt, publicly perform, publicly display, archive and
                make derivative works out of the submitted information. Notification of Infringement
                In case you believe that your work Was replicated in a way that constitutes copyright
                infringement, or your intellectual property rights have been otherwise violated, please supply
                the Subsequent advice to this Site's Copyright Agent:
            </p>
            <ol>
            <li>&emsp;1.&emsp;A digital or physical signature of the person authorized to act for Whoever Owns the
                copyright or other intellectual property interest;</li><br>
            <li>&emsp;2.&emsp;A description of the copyrighted work or other intellectual property which you claim has
                been infringed;</li><br>
            <li>&emsp;3.&emsp;A description of where the material that you claim is infringing is found on the Site;</li><br>
            <li>&emsp;4.&emsp;The title, address, telephone and email Tackle;</li><br>
            <li>&emsp;5.&emsp;An announcement by you, made under penalty of perjury, which the data provided on
                your Notice is accurate and that you are the copyright or intellectual property owner or
                authorized to act on the copyright or intellectual property owner's behalf.</li><br>
            <li>&emsp;6.&emsp;Our copyright representative can be attained as follows:</li><br>
            <li>&emsp;7.&emsp;Email: <a class="text-gray-700 underline" href="mailto:misuse@obackpage.com">misuse@obackpage.com</a> (Remember to put Copyright Infringement in the subject line)</li>
            <br></ol>
            <p>
                The Site may, under suitable circumstances and in our discretion, disable or terminate the
                accounts of consumers who could be repeat infringers.
            </p><br>
            <div class="font-bold text-base">Privacy Policy:</div><br>
            <p>
                The Website has made a privacy setting forth how information gathered about you is gathered,
                used and stored. The usage of the Site constitutes acknowledgment and agreement with our
                online privacy policy. You further acknowledge and agree that The website may use your private
                information within the way explained in our privacy.
            </p><br>
            <div class="font-bold text-base">Submitting of Ads:</div><br>
            <p>
                You know that each time you place an ad with this website or use the website, you agree to such
                Terms. By agreeing to these Conditions, you acknowledge that the Site may mail you email
                messages informing you concerning services and products offered by the Site (or its affiliates
                and spouses ) You understand and consent that these kinds of communications really are part
                and parcel of one's enrollment for and use of this Website; if you do not want to receive further
                communications by the Site (or its associates and partners), you need to terminate your
                registration by sending a cancellation note to get hold of (@)obackpage.com. In the event you
                opt to get mobile alarms regarding any advertisement, you consent we may send automated
                texting into your cell telephone. If you don't want to receive such text messages, you ought not
                accept the mobile notifications choice. We will not mail you any marketing or advertisements by
                text messages. Message and data rates can submit an application for notifications.
            </p><br>
            <div class="font-bold text-base">Costs:</div><br>
            <p>
                The Site may impose a commission on the submitting of content material in particular regions of
                the Site. Users sharing Content to fee-based areas are liable for such Content and for compliance
                with such Terms. Under no circumstances will the Website supply a refund in case that
                information is removed from fee-based areas for breach of those Conditions.
            </p><br>
            <div class="font-bold text-base">Hyperlinks:</div><br>
            <p>
                The Website doesn't have any control over and isn't accountable for the content of or claims
                made on internet sites that may be associated with from the Site, whether or not they may be
                connected with the Site. Any websites linked to from the Website are for your convenience only,
                and you get them at your own risk.
            </p><br>
            <div class="font-bold text-base">Re-lease:</div><br>
            <p>
                The website assumes no liability for the accuracy, currency, completeness or usefulness of
                information, views, opinions or advice from any materials contained on the website. Moreover,
                it does not support any comments or recommendations posted by other people. Any advice
                recorded on the website could be the responsibility of the man or persons posting the
                information. Any consumer who violates the conditions may be permanently banned from
                posting ads or utilizing the Site. You know that all postings, messages, ads, ads, images, sounds,
                graphics, text, documents, video or other materials (together"Content") posted on, transmitted
                through, or linked from the website, are solely the duty of the person from whom such Content
                originated. Now you understand that the Site does not control, and isn't responsible for Content
                which can be found on the Site. You agree that the Site does not pre-screen, track or approve any
                information, but that the Site will have the right, however, not the responsibility to remove,
                move (which includes going an ad or submitting to another section or group within the
                classifieds), refuse, edit or delete any Content for any reason whatsoever. The website will not be
                responsible for practically any interaction between you and one other of the website. Your
                dealings with others throughout the Site are solely between you and this other celebration. On
                no account will the Site be liable for any products, services, resources or content available
                through such third party dealings or communications, or for any injury related thereto. The Site
                is under no obligation to eventually become involved with any disputes between you and other
                customers of the Site or between you and some other third parties.
            </p><br>
            <p>
                You agree our assistance is still a venue for posters and customers of the Site. At the event that
                you own a dispute with any user of the Site, you consent that your website is under no obligation
                to become included. You agree to publish the Site from all claims, demands, and obligations
                arising from or in connection with this kind of challenge.
            </p><br>
            <p>
                You are totally responsible and accountable for any ad content you post or any ad that's posted
                through your Account.
            </p><br>
            <p>
                We usually do not issue refunds or credits as a result of our exceptionally reduced prices and
                minimal administrative personnel.
            </p><br>
            <p>
                You acknowledge, consent and agree that the website will gain access, preserve and disclose your
                account info and Content you upload, post, or otherwise make on the Site if needed to do this for
                legal reasons or within a superb faith belief that such access, preservation or disclosure is
                reasonably crucial to:
            </p><br>
            <ol>
            <li>&emsp;1.&emsp;conform to legal process</li><br>
            <li>&emsp;2.&emsp;comply with legal requirements imposed by Federal, State or civil regulation or authorities</li><br>
            <li>&emsp;3.&emsp;enforce these Terms</li><br>
            <li>&emsp;4.&emsp;respond to claims that any Content violates the rights of 3rd parties</li><br>
            <li>&emsp;5.&emsp;respond to some requests for customer care</li><br>
            <li>&emsp;6.&emsp;Safeguard the rights, property or personal safety of the Site, its users and the public.</li><br>
            </ol><br>
            <div class="font-bold text-base">Limitation of Obligation:</div><br>
            <p>
                The advice services available for your requirements on this Site could contain errors and are
                susceptible to periods of interruption. While the Site does its very best to keep up the
                information, goods and services it offers on the Site, it can't be held accountable for any errors,
                defects, lost profits or other consequential damages originating from the use of the website. By
                applying the site, you agree to defend, indemnify and hold harmless the indemnified parties
                from all liability regarding your use of the website or participation in any site's activities.
            </p><br>
            <p>
                if you're dissatisfied with the website, or any portion thereof, or do not agree with these terms,
                your only recourse and exclusive remedy shall be to stop employing the site.
            </p><br>
            <p>
                You agree to indemnify and hold harmless the Indemnified Parties from any claim or demand,
                including reasonable lawyers' fees, made by any third party due to or arising out of your usage of
                the Site, the violation of these conditions by you, or the breach by you, or other users of the
                Website using your personal computer, of any intellectual property or any other right of any
                individual or entity. The Site reserves the right, at its expense, to assume the exclusive defense
                and control of any issue otherwise subject to indemnification from you.
            </p><br>
            <div class="font-bold text-base">Jurisdiction and Choice of Law:</div><br>
            <p>
                All these Terms are exclusively governed by law. Any disputes arising from or in relation to the
                use of the website or these Conditions shall be subject to the jurisdiction of the court in Indore
                (M.P). Disputes must be filed over 1 (1 ) year such dispute arose.
            </p><br>
            <div class="font-bold text-base">Basic:</div><br>
            <p>
                These Terms constitute the whole agreement involving you and the Site and govern your use of
                the website, superseding any prior agreements between you and the website. You might also be
                subject to other stipulations which may apply when you use affiliate solutions , third-party
                content or third-party applications, or see another website linked to by this Site. The section
                titles in these Terms are for convenience only and don't have any legal or contractual effect.
            </p><br>
            <p>
                Please report any violations of the Requirements to: <a href="mailto:misuse@obackpage.com" class="text-gray-700 underline">misuse@obackpage.com</a>
            </p><br>
            <div class="font-bold text-base">Severance and Waiver:</div><br>
            <p>
                You agree and acknowledge that if any provision of these Terms shall be unlawful, void, or for
                any reason unenforceable, then that provision will be deemed severable from these types of
                Conditions and shall not influence the validity and enforceability of any remaining provisions.
                What's more, if any provision of these Terms is found by a court of competent authority to be
                invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties'
                intentions as reflected in the provision.
            </p><br>
            <p>
                The Site's failure to exercise or enforce any right or provision of these Conditions won't
                constitute a waiver of such right or provision unless acknowledged and agreed to from the
                website
            </p><br>
            <p>
                obackpage can be a web site (the “Site") that hosts categorized advertisements and relevant
                articles created and manufactured with third party users. Your use of the website, for example
                most of access, features or services, is governed with these Conditions of Use and the Privacy By
                using the Site in any way, you are agreeing to conform to these Conditions.
            </p>

            </div>
            </div>


                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
