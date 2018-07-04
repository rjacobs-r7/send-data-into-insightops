<?php
const BASE_DIR = '../';
const DATA_DIR = BASE_DIR . 'data/';

const TARGETS = [
	'EU' => 'data.logentries.com',
	'US' => 'data.us.logentries.com',
	'Canada' => 'ca.data.logs.insight.rapid7.com',
	'Australia' => 'au.data.logs.insight.rapid7.com'
];

const PLACEHOLDER_DATA = 'Spicy jalapeno bacon ipsum dolor amet sausage in landjaeger prosciutto ea filet mignon. Kielbasa labore tempor, hamburger ipsum drumstick dolore non fugiat pork eiusmod ham ut ad culpa. Turducken qui sint strip steak nisi non ground round rump swine mollit andouille jowl porchetta kielbasa. Laborum ball tip chicken andouille ribeye pastrami pariatur dolore pig incididunt drumstick.
Pariatur ribeye sirloin aliquip ad kevin jowl pancetta drumstick tongue laboris. Meatball qui ut, laborum flank nisi in. Ut short loin sint shank, quis short ribs ribeye pariatur. Tenderloin fugiat ex commodo pig t-bone dolor. Burgdoggen dolore anim kielbasa ipsum id.
Salami esse picanha kevin, ground round pork belly occaecat officia eu. Andouille deserunt chuck, reprehenderit brisket alcatra prosciutto officia nisi culpa landjaeger. Pancetta tri-tip exercitation shank, tempor pork loin in mollit. Sint non short ribs, pig velit anim magna dolore hamburger. Anim short ribs ipsum commodo nostrud ea id reprehenderit pork kielbasa beef. Tri-tip voluptate cupidatat, fugiat culpa turkey aute eiusmod velit chicken ex laborum brisket shankle.
Minim est officia venison, lorem boudin anim jerky excepteur. Tongue laboris dolore brisket in biltong ham esse sirloin nulla dolore officia cow meatball. Ham short ribs dolore minim, kevin cillum duis rump shoulder esse shankle prosciutto. Ut id laborum kevin, mollit tongue pig andouille lorem pancetta deserunt tempor brisket sint. Voluptate dolore ground round in nulla ex minim proident t-bone salami tri-tip reprehenderit. Turducken ullamco exercitation aliqua mollit, cupim sunt chicken reprehenderit ad excepteur filet mignon. Reprehenderit elit ham, ham hock non kevin turducken nostrud dolor aute do.
Leberkas cillum pariatur chuck ea ham magna drumstick duis. Meatball bacon porchetta deserunt. Rump aliquip sirloin duis ribeye. Brisket hamburger duis pork meatball.
Flank meatball proident officia. Landjaeger velit brisket tenderloin picanha capicola eu. Reprehenderit anim consectetur nostrud. In pork ribeye kielbasa id.
Laborum proident ea, short ribs ground round prosciutto filet mignon brisket quis. Duis ad alcatra t-bone buffalo veniam, enim andouille pork chop picanha aute meatball sausage velit. Exercitation magna burgdoggen consectetur. Pastrami aute dolor cupidatat doner fatback excepteur ad consectetur. Labore officia jowl, minim shoulder in cow velit bresaola short loin consequat turkey. Short ribs consequat quis, incididunt esse sint est beef brisket jowl leberkas.
Capicola officia pig id ea pancetta, kielbasa non. Pork belly jowl pariatur exercitation sed beef ribs doner veniam fugiat ex elit tongue. Sint pork aute, porchetta jerky lorem ball tip capicola pig ut. Proident tempor ad labore boudin tail flank t-bone biltong sint ex burgdoggen veniam fugiat incididunt. Capicola esse alcatra ball tip t-bone porchetta. Burgdoggen do ullamco mollit prosciutto in dolore ipsum. Labore cillum ut flank.
Hamburger dolor flank tri-tip, salami beef magna short loin in ham hock rump. Drumstick voluptate fugiat, in tenderloin short loin pork belly ribeye consequat nisi. Bresaola consequat mollit meatball, brisket tail anim est sed beef kielbasa ut rump ipsum ex. Ex shankle doner shank in qui sausage chicken pork loin, cow reprehenderit tail dolor pork belly veniam. Andouille pork loin picanha magna rump, laborum fugiat ut non pork chop kielbasa frankfurter biltong ipsum in.
Tongue nostrud nulla, pariatur excepteur lorem in tri-tip commodo proident andouille. Tenderloin picanha kevin pork cupim, biltong enim ut commodo ham voluptate pork belly. Fatback anim minim laboris, beef ribs turkey sed. Pork loin venison shoulder pancetta, ball tip leberkas bresaola. Bacon pork belly laboris, boudin pancetta mollit nulla cillum et jerky brisket ex bresaola exercitation. Adipisicing meatball turkey excepteur shankle, bacon aliquip non.
Shankle pork sirloin, qui excepteur doner irure tail enim leberkas. Turkey officia incididunt quis, sint nisi pork chop qui alcatra. Buffalo qui proident, do filet mignon jowl brisket duis anim ball tip sirloin mollit shank beef. Consequat ad pork chop pariatur nisi, rump excepteur cillum beef ribs ex buffalo voluptate prosciutto aliquip.
Ullamco adipisicing tri-tip pastrami incididunt meatloaf alcatra enim pig jowl voluptate eiusmod in pork chop. Meatloaf ullamco veniam, cillum nisi ipsum labore do voluptate pork loin filet mignon excepteur. Officia culpa in cupidatat mollit occaecat ground round ad non porchetta duis veniam strip steak et. Fugiat beef voluptate velit do aliquip jowl chuck sausage nostrud tenderloin qui.
Voluptate doner ut, porchetta excepteur qui culpa labore leberkas cillum officia eu. Bacon pig cupim in esse in magna culpa. Drumstick meatball consequat, bresaola rump turkey ham cillum. Prosciutto incididunt short loin, nulla voluptate frankfurter id irure brisket reprehenderit venison turkey pork aliqua beef ribs. Rump nisi pork chop, velit adipisicing ground round short loin sausage ad picanha. Ut eiusmod deserunt kevin, pork aliqua adipisicing commodo fugiat elit. Cupim in qui fugiat leberkas incididunt ut velit t-bone.
Minim doner aliquip commodo, ut ball tip flank shoulder leberkas dolor. Beef dolore chuck t-bone pariatur salami corned beef ham. Eu adipisicing esse, beef ribs picanha bresaola t-bone fugiat turducken meatloaf officia. Doner non ut pariatur. Aliqua voluptate tongue tail laboris pig. Chicken duis deserunt incididunt dolore boudin kielbasa culpa hamburger. Reprehenderit fugiat sint, duis consectetur boudin laboris doner hamburger culpa consequat brisket shoulder ball tip.
Labore t-bone biltong pariatur aliqua salami laborum sirloin turducken eu. Short ribs eu ball tip commodo, velit ham hock ut chicken landjaeger dolor capicola tail. Labore strip steak enim, ea aute quis qui alcatra beef frankfurter eiusmod bresaola pork chop brisket. Laboris adipisicing ullamco, fatback buffalo pancetta turducken leberkas.
Adipisicing cow burgdoggen brisket. Pork chop ipsum proident nostrud, irure turkey boudin culpa tempor capicola. Cow turkey aute, lorem filet mignon ham velit eu biltong strip steak frankfurter adipisicing tri-tip picanha. Enim aliqua bresaola, picanha in reprehenderit occaecat chicken sed jowl. Dolor sausage nulla duis shank jerky. Leberkas filet mignon incididunt cupidatat, voluptate sunt tail t-bone deserunt. Deserunt spare ribs andouille tongue veniam pork.
Ball tip t-bone adipisicing, pig enim nisi irure spare ribs tri-tip proident reprehenderit. Shank do laborum ad. Elit short ribs hamburger cupim sed mollit. Cupidatat laborum veniam, ut enim pork belly ribeye landjaeger velit ham in nulla tri-tip. Biltong aute magna aliquip dolor. Sint pork shoulder sed chuck, aute officia minim exercitation burgdoggen sausage mollit ipsum. Nulla ut swine ut hamburger strip steak alcatra ham picanha meatloaf sirloin irure consequat.
Venison jerky cillum porchetta in tri-tip shank. Swine shank fugiat pariatur. Turducken frankfurter anim porchetta et sirloin, sausage qui ball tip shoulder. Frankfurter et reprehenderit aute, tempor eu short loin. Filet mignon bresaola ground round ball tip, velit excepteur shank venison nostrud. Flank cow culpa pancetta ea aliquip tenderloin ad chuck fugiat dolore.
Enim ut flank swine cupidatat picanha. Doner short loin ut andouille meatball cupim. Hamburger cupim tempor proident. Burgdoggen tenderloin sunt kevin jerky occaecat pork belly. In dolore fugiat flank exercitation short ribs. Drumstick pariatur consectetur, in landjaeger ground round cupidatat sed bacon shoulder strip steak eu. Pork occaecat tenderloin, minim short loin venison ribeye leberkas duis quis irure chuck ullamco in.
Kevin chuck tri-tip fugiat, qui picanha laborum est aliquip landjaeger. Cupim tail laborum eu meatloaf. Sunt exercitation rump turducken cupidatat jerky pork belly boudin esse excepteur fugiat. Aute sausage shankle venison pork loin ut. Ea ipsum fatback cupidatat. Enim ullamco qui ground round shankle pork belly culpa capicola lorem turducken boudin consectetur.
Lorem alcatra eiusmod bacon, chuck burgdoggen buffalo biltong turducken tri-tip non. Strip steak laborum laboris fatback, sed pastrami tri-tip brisket. Sunt mollit prosciutto dolor exercitation, sed t-bone ea non pork loin. Commodo esse boudin, dolor aute exercitation jowl id bacon.
Salami filet mignon short ribs ipsum enim qui. Drumstick bresaola fatback tri-tip sirloin veniam turkey est ex pancetta irure. Cow veniam exercitation boudin nisi ad sirloin strip steak shankle pancetta. Porchetta cupim velit corned beef excepteur dolor aliqua strip steak ham hock ea short ribs pariatur turducken dolore boudin.
Kevin picanha kielbasa doner adipisicing ut filet mignon. Non ribeye quis, beef ribs sausage duis pariatur. Nulla cupim tail burgdoggen jerky ham ullamco swine meatball beef ham hock pastrami tempor. Short ribs pastrami frankfurter, non aliquip deserunt commodo. Minim chuck chicken, shank voluptate bacon laborum aute irure spare ribs bresaola pork chop duis strip steak.
Turkey irure mollit, aute tail ipsum pastrami flank. Lorem spare ribs buffalo, swine leberkas eiusmod quis ball tip anim cupim dolor in hamburger andouille. Laboris burgdoggen hamburger veniam ipsum magna flank. Frankfurter eu beef kielbasa aliqua ground round voluptate nisi nulla meatloaf do in cupim.
Adipisicing mollit ullamco jerky fatback t-bone ground round capicola anim chuck ut burgdoggen. Kevin eu nisi short loin. Meatloaf ut burgdoggen prosciutto, sunt short ribs rump tri-tip kevin. Laboris est esse meatloaf ad, culpa pariatur pork loin. Do ipsum rump shoulder deserunt. Aliquip chuck aliqua pig consectetur in pancetta beef ribs. Id cupim t-bone tri-tip biltong drumstick turkey shank anim spare ribs corned beef.
Kielbasa turducken ut beef. Bacon jerky sint rump swine ground round. Salami alcatra shankle landjaeger ut voluptate turkey jerky hamburger. Bresaola biltong consectetur leberkas. Incididunt chicken irure, proident dolore alcatra pork chop laboris elit veniam in reprehenderit do.
Beef est et ham hock, proident aliquip frankfurter esse commodo capicola laborum. Shankle filet mignon shoulder, excepteur leberkas salami reprehenderit cupidatat alcatra aliqua ex pork chop. Do ham hock mollit, rump pig irure ea. In jerky pork loin, salami burgdoggen consequat dolor est duis alcatra rump sint officia quis tongue. Meatloaf sausage ham, landjaeger venison beef salami filet mignon pork loin pariatur. Eiusmod consectetur pork loin turducken tri-tip ham hock.
Exercitation lorem proident do t-bone salami, labore ullamco incididunt excepteur chicken nulla landjaeger meatball. Non tail cillum laboris commodo, in aliquip lorem ut consectetur swine. Tenderloin labore ut jerky, meatloaf rump buffalo do et nulla. Ullamco turkey boudin est. Nostrud cow corned beef capicola. Elit short loin cow shankle id.
Occaecat aliquip lorem nisi tempor, commodo rump aute et frankfurter flank cillum sirloin jowl. Jowl alcatra strip steak kevin elit nisi pork doner landjaeger filet mignon. In brisket filet mignon short ribs pork belly tempor sunt ut. Short loin burgdoggen venison shank, ipsum et irure sirloin pancetta reprehenderit boudin. Shoulder alcatra shankle, magna pariatur ham hock ut leberkas. Pig duis turducken, short loin shoulder magna strip steak.
Pork chop spare ribs officia deserunt exercitation. Sirloin sint meatball quis capicola velit, drumstick qui t-bone bresaola sed. Enim ut anim pork short ribs. Venison meatloaf fatback ground round alcatra burgdoggen velit kevin meatball deserunt dolor short ribs picanha pastrami.
Duis hamburger ad pancetta mollit capicola. Aliqua aute in pork belly dolore consectetur cow sausage short ribs pork in jerky sunt andouille. Rump venison hamburger lorem exercitation, frankfurter leberkas jowl dolor capicola andouille. Qui ham hock pariatur, consectetur short loin salami ut turducken. Ground round pork fatback venison short loin, doner beef ribs reprehenderit pork belly leberkas burgdoggen biltong pig. Ea shoulder jerky tongue ham cupidatat sirloin pancetta elit frankfurter do strip steak ball tip.
Do biltong reprehenderit jerky proident pig, sirloin ipsum sint chicken. Cupim venison capicola, ex brisket tempor consectetur aliqua. Fatback ground round exercitation non boudin salami shoulder veniam frankfurter. Prosciutto shankle shoulder cupidatat aliquip corned beef, ground round et.
Eiusmod beef drumstick pancetta corned beef ground round. Landjaeger officia ad, aute picanha laborum hamburger bresaola leberkas. Et tongue prosciutto drumstick, chuck turducken pariatur ut. Drumstick pork loin ut fugiat anim quis pork chop. Officia doner porchetta, brisket sint capicola mollit turkey pancetta magna ipsum aliqua non lorem. Short ribs proident flank, eiusmod bresaola fatback biltong fugiat eu bacon in quis officia tail. Sed spare ribs et, andouille commodo corned beef biltong pork loin ground round qui aute in.
Tenderloin velit dolore beef. Ball tip swine filet mignon beef ribs pork belly elit strip steak kielbasa prosciutto nulla ea turducken nostrud aliquip est. Quis labore landjaeger t-bone. Commodo beef ribs pig minim, pork chop bresaola duis short ribs id salami.
Minim meatball kielbasa, leberkas duis consectetur pork belly consequat labore landjaeger cupim. Excepteur capicola cillum, tenderloin chuck aute corned beef. Ham hock reprehenderit in, jerky ham venison enim esse do cillum. Cupim quis sed tempor ut voluptate biltong mollit aute ullamco veniam picanha in. Tail fugiat chicken tempor commodo ribeye qui in hamburger capicola ut. Pariatur flank salami esse, proident venison labore occaecat. Pork ut quis ea ut spare ribs sed irure ullamco proident.
Culpa porchetta pariatur tail brisket non laboris incididunt t-bone voluptate andouille elit id sausage flank. Pancetta drumstick leberkas pig. Esse fugiat ad flank ex pancetta, laboris ut fatback qui. Landjaeger ipsum tongue, ham aute kielbasa aliqua turkey kevin ad strip steak hamburger ham hock. Pork chop consequat pork loin alcatra short loin mollit ipsum ea duis strip steak. Consequat beef ribs hamburger dolore cupim, sunt dolor eu veniam reprehenderit tenderloin sint biltong.
Ullamco cillum tempor short ribs ad, tongue in boudin fugiat dolore salami. Jowl adipisicing culpa ham hock, ham turducken sunt turkey jerky doner tail drumstick quis commodo velit. Shankle biltong sunt spare ribs shank short loin pork shoulder ham turkey doner ex. Ullamco fugiat dolor, minim short ribs kielbasa duis meatball turducken irure magna ball tip. Ground round drumstick sed porchetta in consequat shank.
Alcatra aliquip velit tenderloin. T-bone frankfurter pastrami labore. Ham hock cupim shankle cow, boudin andouille bacon reprehenderit lorem. Chicken incididunt buffalo venison jowl sunt et hamburger ground round.
Sirloin kielbasa ut frankfurter deserunt ut. Filet mignon pork loin magna doner turkey lorem andouille tail dolore ham hock et ex picanha commodo duis. Anim in in culpa. Non deserunt ut bacon velit eiusmod ribeye adipisicing ball tip pork belly. Capicola pig duis irure, fatback anim nulla consectetur jerky buffalo dolore.
Eu tri-tip occaecat dolore, ribeye est tail in filet mignon tempor irure shoulder. Chuck short ribs filet mignon, corned beef ipsum ball tip rump prosciutto duis tongue aliquip. Filet mignon tail fugiat, ea ball tip ad commodo et labore shankle salami short loin irure elit. Commodo ea est aute, bacon short loin magna strip steak reprehenderit sausage jerky duis deserunt proident.
Pork doner fugiat labore hamburger tail velit sausage sed turkey, sirloin buffalo. Cupim minim short ribs frankfurter pork chop jerky. Deserunt in pork chop, exercitation tri-tip pig ribeye jerky incididunt excepteur short ribs. Leberkas tri-tip nulla turkey jerky beef ribs flank. Ex hamburger tail pork loin. Pork chop tri-tip turducken shankle chicken magna sint adipisicing sausage picanha landjaeger reprehenderit meatball commodo.
Labore velit bacon, nostrud fugiat pork loin ullamco excepteur eiusmod picanha. Meatball venison fugiat sunt deserunt lorem. Consequat cow aute meatball. Ut beef ham hock, tempor porchetta elit pig nisi in capicola. Ut porchetta ipsum in veniam duis shankle doner buffalo sint laborum. Pork chop tenderloin aliqua, short ribs et ea chicken bacon incididunt do bresaola magna.
Eiusmod incididunt est in strip steak sirloin tenderloin capicola in. Consequat nisi meatball anim nulla pork belly incididunt. Sausage short ribs pork sint jerky filet mignon turducken pig tenderloin quis. Tongue fugiat tri-tip ribeye minim reprehenderit turkey beef ribs cillum bresaola buffalo laboris. Salami aute shankle, shank consectetur labore short ribs beef doner jowl. Consequat rump ad, eu ground round tongue ipsum dolor qui ullamco.
Meatball reprehenderit voluptate, drumstick lorem leberkas ut buffalo rump shankle sed. Ex brisket jowl reprehenderit ribeye elit meatball aliqua. Pork loin kielbasa pork chop velit kevin shankle in turkey adipisicing enim bresaola chuck picanha elit. Minim quis ball tip drumstick meatloaf shoulder ground round. Flank capicola id alcatra.
In spare ribs hamburger ham tenderloin ut, short ribs labore. Swine rump sausage ullamco ribeye. Kevin occaecat shankle, chuck ullamco reprehenderit ea exercitation quis enim brisket boudin burgdoggen in. Fugiat aliqua proident duis magna ball tip boudin pig. Chicken tail pork loin kevin.
Doner nostrud fugiat do, beef ribs corned beef pork brisket consectetur anim strip steak esse ad. Ball tip mollit commodo chuck bresaola sed velit aliqua in t-bone swine deserunt ea. Dolor eiusmod jerky fugiat biltong, est jowl sirloin ut. Shank turducken brisket pancetta ground round culpa.
Meatball excepteur tri-tip corned beef irure. Consequat nulla cow labore, anim chuck sint magna. Esse enim sed, elit frankfurter velit culpa shoulder corned beef short ribs officia picanha tail capicola drumstick. Salami turkey officia kevin excepteur pork belly porchetta tongue voluptate t-bone ribeye pariatur meatloaf ut short ribs. Pork loin in corned beef elit laborum enim deserunt ad tongue chicken cow meatloaf.
Esse rump jerky, filet mignon proident pork picanha turkey enim adipisicing corned beef. Beef sed excepteur aliquip, eiusmod dolore commodo. Tenderloin pariatur nulla kielbasa non pork loin capicola dolore tempor mollit turkey corned beef. Tenderloin beef nostrud, bacon salami sed cupim mollit swine pariatur shoulder jowl enim. Burgdoggen frankfurter hamburger ipsum nostrud. Tempor strip steak biltong ex duis est pork chop dolore ribeye. T-bone consectetur cupim frankfurter.
Adipisicing burgdoggen tri-tip ribeye in elit filet mignon bresaola turducken aliquip enim. Bacon pork belly elit aliqua shank swine tongue sint deserunt chuck ex ham magna bresaola. Pork belly quis short loin frankfurter. Duis venison shoulder, cillum meatball in t-bone irure kielbasa.
Enim officia aute meatball deserunt. Frankfurter corned beef nulla shoulder qui, short ribs dolore. Ad do dolore, culpa flank alcatra veniam esse fatback tempor doner frankfurter. Venison culpa nulla, ball tip alcatra pariatur duis occaecat pork belly dolor ham laboris sunt shankle.';