<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Commnent;
use App\Models\User;
use App\Models\Product_Images;
use App\Models\Product_image;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\Favorite;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades;
use Storage;

use Illuminate\Support\Facades;
use Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ProductList = Product::all();
        return view('admin.producter')
        ->with('ProductList', $ProductList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo $id;
        $nameuser = Auth::user()->name;

        $data_product = Product::find($id);

        $category = Category::find($data_product->Catid);


        $data_images = Product_image::join('products', 'products.id', '=' , 'product_images.ProductId')->where('product_images.ProductId', $id)
        ->get(['product_images.*']);

        $data_favorite =DB::table('favorites')
                ->join('users','favorites.UserId', '=', 'users.id')
                ->join('products', 'favorites.ProductId', '=', 'products.id')
                ->select('products.*','favorites.Liked')
                ->get();


        $data_commnent =DB::table('commnents')
        ->join('products', 'products.id', '=' , 'commnents.ProductId')
        ->join('users', 'users.id' , '=' , 'commnents.UserId')
        ->select('commnents.*', 'users.name')
        ->get('commnents.*', 'products.id');


        
        
        return view('product', compact('data_product','data_images','data_favorite', 'data_commnent', 'nameuser', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::where("id", $id)->first();
        $categories = Category::all();

        return view('admin.product-edit')
            ->with('products', $products)
            ->with('categories', $categories);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $products = Product::where("id",  $id)->first();
        $products->Name = $request->Name;
        $products->Price = $request->Price;
        $products->Description = $request->Description;
        
        // $products->Catid = $request->Catid;

        if($request->hasFile('Image'))
        {
            // Xóa hình cũ để tránh rác
            Storage::delete('public/frontend/images/' . $products->Image);

            // Upload hình mới
            // Lưu tên hình vào column sp_hinh
            $file = $request->Image;
            $products->Image = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/frontend/images/', $products->Image);
        }
        $products->update();

        return redirect()->route('admin.producter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ProductDestroy($id)
    {
        $products = Product::findOrFail($id);
        if(empty($products) == false)
        {
            // Xóa hình cũ để tránh rác
            assets::delete('public/frontend/images/' . $products->Image);
        }

        $products->delete();
        return redirect()->route('admin.producter');
    }
    public function get_all_products_for_pie_chart()
    {
        $products = \App\Models\Product::all();
        return view('pie',compact('products')); 
    }
    public function init()
    {
        $data = array(
            //bỏ vì đã thêm vào db
            array(
                'Name'=>"Kingsman Men's Orange Slim-fit Satin-trimmed Cotton-velvet Tuxedo Jacket", 
                'Price'=>'1673',
                'Description'=>"Kingsman's orange tuxedo jacket is, of course, the very same style worn by eggsy in the golden circle. It's tailored from cotton-velvet, accented with black satin peak lapels that are kept in place by the felted undercollar. Wear it with: kingsman shirt, kingsman pants, kingsman shoes, kingsman bow tie. Color: orange",
                'Image'=>'S01.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Green Cable-knit Wool And Cashmere-blend Sweater", 
                'Price'=>'663',
                'Description'=>"The muted hues in kingsman's latest collection are informed by the wwi-era, in which the king's man is set. This sweater has been cableand waffle-knitted by hand in wales from a flecked wool and cashmere-blend. Wear it with: kingsman pants, kingsman cardigan, kingsman boots, kingsman sunglasses. Color: green",
                'Image'=>'S02.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's White Turnbull & Asser Slim-fit Pinned-collar Cotton Shirt", 
                'Price'=>'368',
                'Description'=>"The shirts you'll see in the kingsman films are the handiwork of the tailoring experts at turnbull & asser. Inspired by the king's man , this one is cut for a slim fit from white cotton and pulled in at the collar with a gold pin for a really refined look. Wear it with: kingsman pants, kingsman shoes, kingsman tie, kingsman belt. Color: white",
                'Image'=>'S03.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Navy Harry Slim-fit Super 120s Wool And Cashmere-blend Suit", 
                'Price'=>'2001',
                'Description'=>"In kingsman: the secret service , mr colin firth's on-screen spy, mr harry hart, proclaimed the suit is a modern gentleman's armor, and the kingsmen the new knights. Bearing the motto in mind, this impeccable double-breasted style is the perfect uniform for any refined dresser. This handsome example is made from a navy super 120s wool, sourced from the iconic william halstead mill, a purveyor of fine fabrics since 1875. Cut in a slim fit, this two-piece exudes quality. ",
                'Image'=>'S04.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Gray Shawl-collar Ribbed Wool And Cashmere-blend Cardigan", 
                'Price'=>'663',
                'Description'=>"Kingsman's cardigan is made from mid-weight gray wool and cashmere in a chunky ribbed-knit that makes it particularly cozy. It fastens with contrasting leather-capped buttons and has a smart shawl collar for framing a button-down shirt or slim-fitting rollneck. Color: gray",
                'Image'=>'S05.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Rocketman Navy Slim-fit Cotton-velvet Tuxedo Jacket", 
                'Price'=>'1686',
                'Description'=>"Designed by kingsman and inspired by the 2019 film rocketman , this tuxedo jacket is tailored from rich navy velvet and detailed with passementerie trimming along the pockets and lapels. It's cut slim and lined in bright-red satin. Shown here with kingsman pants, kingsman shirt, kingsman boots, kingsman tie. This item is small to size",
                'Image'=>'S06.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Black Grosgrain-trimmed Cotton-velvet Tuxedo Jacket", 
                'Price'=>'1686',
                'Description'=>"Kingsman's tuxedo jacket is cut with sizeable peak lapels that are balanced out by its padded shoulders and subtle, nipped-in waist that creates a well-proportioned profile. Tailored from plush cotton-velvet and trimmed with grosgrain, it's fully lined and free from back vents to maintain a smooth silhouette. Wear yours with dark pants and evening slippers. Color: black",
                'Image'=>'S07.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Brushed-cashmere Zip-up Hoodie", 
                'Price'=>'803',
                'Description'=>"Kingsman's zip-up hoodie is knitted from soft, mid-weight brushed-cashmere, so it's a particularly comfortable choice. It has a relaxed profile and is embroidered at the chest with the brand's emblem. Team it with the matching sweatpants. Wear it with: kingsman sweatpants, kingsman t-shirt, common projects sneakers. Color: blue",
                'Image'=>'S08.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Gray Archie Reid Slim-fit Double-breasted Prince Of Wales Checked Wool Suit Jacket", 
                'Price'=>'1342',
                'Description'=>"With its fictional headquarters located within savile row tailors, kingsman offers impeccable suiting. This 'archie reid' jacket is cut from prince of wales-checked wool on a new double-breasted block. Wear it with: kingsman suit pants, kingsman shirt, kingsman shoes, kingsman tie. Color: gray",
                'Image'=>'S09.JPG',
                'Catid'=>'1'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Burnished-leather Jacket", 
                'Price'=>'2965',
                'Description'=>"Mr ralph fiennes' aviator jacket immediately caught our attention when the king's man trailer dropped, and we're thoroughly glad to see it in the label's new collection. Inspired by one worn in the film, it's cut from burnished-leather with a distinctive buttoned throat latch and buckled belt. Wear it with: kingsman waistcoat, kingsman suit pants, kingsman shirt, kingsman boots. Color: brown",
                'Image'=>'S10.JPG',
                'Catid'=>'1'
            ),
        );
        $data2 = array(
            //bỏ vì đã thêm vào db
            array(
                'Name'=>"Kingsman Men's Blue Shola Slim-fit Wool And Alpaca-blend Coat", 
                'Price'=>'1332',
                'Description'=>"Kingsman's collections are full of pieces inspired by the closets of the film franchise's most popular characters. Named after shola, portrayed by mr djimon hounsou in the king's man , this coat is cut from an insulating wool and alpaca-blend and modeled after traditional military outerwear. It's fully lined for easy layering and tailored for a slim fit, so it looks just as sharp as a made-to-measure style.",
                'Image'=>'T01.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Gray Double-breasted Herringbone Alpaca Coa", 
                'Price'=>'2001',
                'Description'=>"The herringbone alpaca used for kingsman's coat feels particularly fine and smooth, giving it exceptional drape. It's tailored in a double-breasted shape with peak lapels that are reminiscent of '20s styles, the setting for the film franchise's latest prequel. Color: gray",
                'Image'=>'T02.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Double-breasted Wool Peacoat", 
                'Price'=>'1673',
                'Description'=>"Kingsman's collections are inspired by the famed film franchise and its impeccably dressed characters. This peacoat is tailored from deep brown wool with a tonal satin lining, and has a refined double-breasted profile that fastens with horn buttons. Color: brown",
                'Image'=>'T03.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Conrad Double-Breasted Shearling-Trimmed Wool Coat", 
                'Price'=>'1095',
                'Description'=>"Kingsman's coat subtly channels traditional aviator styles, the notched lapels are trimmed with warm shearling. Inspired by one worn by agent conrad in the king's man , it's cut from soft camel wool to a knee-length hem, and has just enough space to layer a thick sweater underneath. Elegant leather-covered buttons finish the double-breasted front. Wear it with: kingsman sweater, kingsman suit pants, kingsman boots. Color: brown",
                'Image'=>'T04.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Double-breasted Cashmere And Wool-blend Overcoat", 
                'Price'=>'2001',
                'Description'=>"Kingsman's cardigan is made from mid-weight gray wool and cashmere in a chunky ribbed-knit that makes it particularly cozy. It fastens with contrasting leather-capped buttons and has a smart shawl collar for framing a button-down shirt or slim-fitting rollneck. Color: grayWe can imagine mr colin firth's dapper kingsman character, mr harry hart, wearing this camel overcoat with a pinstriped suit. It's made from warm wool and mohair-blend and tailored in a traditional double-breasted shape that hits just above the knees. It's fully lined to make layering comfortable and has a single vent for when you require a little extra room to move. Shown here with kingsman jacket, kingsman pants, kingsman shirt, kingsman boots, kingsman tie. This item is small to size. Explore kingsman: the golden circle. Color: brown",
                'Image'=>'T05.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Blue + Jean Shop Tequila's Statesman Blanket-lined Selvedge Denim Jacket", 
                'Price'=>'553',
                'Description'=>"You'll spot this jacket on mr channing tatum's character agent tequila in the latest kingsman instalment the golden circle. It's made in collaboration with new york boutique jean shop from selvedge denim sourced from the storied white oak plant in north carolina and finished with an exceptionally soft checked blanket lining. Referencing classic western styles, it's trimmed with a brown corduroy collar, branded rivets and contrasting white seams. Shown here with kingsman jeans, kingsman shirt, kingsman boots. Explore kingsman: the golden circle. Indigo selvedge denim. ",
                'Image'=>'T06.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Burnished-leather Jacket", 
                'Price'=>'2297',
                'Description'=>"Kingsman's jacket has been made in england from supple burnished-leather that'll develop its own unique patina over time. An interpretation of one worn in the king's man , it has a retro-style camp collar and fastens with glossy horn buttons. It's cut for a relaxed fit and fully lined, so it'll slip on easily over knitwear or shirts. Wear it with: kingsman sweater, kingsman pants, kingsman boots. Color: brown",
                'Image'=>'T07.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Green Slim-fit Cotton-blend Corduroy Suit Jacket", 
                'Price'=>'1209',
                'Description'=>"While kingsman's fictional savile row tailor is stocked with some of the world's finest textiles, the franchise's collection brings the fantasy into effect. This suit jacket is cut from cotton-blend corduroy, sourced from an artisanal clothmaker that specialises in the fabric. Small to size. Color: green",
                'Image'=>'T08.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Gray Slim-fit Double-breasted Prince Of Wales Checked Wool Suit Jacket", 
                'Price'=>'1342',
                'Description'=>"London's savile row serves as a central location in the kingsman franchise, so naturally the line includes traditional tailoring. This double-breasted suit jacket is cut from prince of wales checked wool and has lightly structured shoulders and a slim profile. The partial lining makes it ideal for wearing year-round",
                'Image'=>'T09.JPG',
                'Catid'=>'2'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Shearling Bomber Jacket", 
                'Price'=>'2515',
                'Description'=>"EXCLUSIVE AT MR PORTER. This bomber jacket is the true embodiment of Kingsman's masterful design and fine fabrications. It's crafted from weighty brown-on-cream shearling with a butter-smooth exterior and plush backing, and features classic notch lapels and two handy pockets. Sheepskin 100%. Color: brown",
                'Image'=>'T10.JPG',
                'Catid'=>'2'
            ),
        );
        $data3 = array(
            //bỏ vì đã thêm vào db
            array(
                'Name'=>"Kingsman Men's Blue Shola Slim-fit Wool And Alpaca-blend Coat", 
                'Price'=>'469',
                'Description'=>"Designed to be worn with the matching jacket, kingsman's suit pants are made from mid-weight navy wool sourced from yorkshire-based mill arthur harrison. They're fitted with buckled side adjusters so you can forgo a belt, and the hems are left unfinished for easy alterations. Wear it with: kingsman jacket, kingsman shirt, kingsman shoes, kingsman tie. Color: blue",
                'Image'=>'M01.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Conrad Slim-fit Mélange Wool Suit Pants", 
                'Price'=>'469',
                'Description'=>"With its agency hidden in a savile row tailors, kingsman has exacting standards when it comes to suiting. These pants are the same as those worn by agent conrad in the latest film, the king's man , set in the early 1900s. They're cut from mélange wool with adjustable waist tabs and sharply pressed creases. Wear it with: kingsman jacket, kingsman waistcoat, kingsman shirt, kingsman boots, kingsman tie, tom ford pocket square. Color: blue",
                'Image'=>'M02.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Gray Slim-fit Conrad Wool-flannel Pants", 
                'Price'=>'1673',
                'Description'=>"In the film, kingsman's hq is nestled among tailoring houses on savile row, so it's only natural that the accompanying line is filled with impeccable silhouettes and meticulously sourced fabrics. These slim pants are cut from soft wool-flannel that's been acquired from a 350-year-old mill. They have side adjusters so you can perfect the fit and forgo a belt. Color: gray",
                'Image'=>'M03.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Green Slim-fit Checked Wool-flannel Pants", 
                'Price'=>'468',
                'Description'=>"The colourful checks that detail kingsman's pants look best with a plain knitted sweater, a navy one will look particularly smart. Cut slim from soft wool-flannel, this pair has buckled waist tabs and unfinished hems, so you can personalise the fit. Wear it with: kingsman sweater, kingsman boots. Color: green",
                'Image'=>'M04.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Slim-fit Herringbone Cotton And Linen-blend Pants", 
                'Price'=>'395',
                'Description'=>"The herringbone pattern woven into kingsman's pants gives a nice textured finish to the otherwise minimal design. Ideal for almost any occasion, this pair is made from a substantial cotton and linen-blend and cut slim through the leg with a neat flat front. The unfinished hems mean you can tailor the length accordingly. Wear it with: kingsman sweater, kingsman t-shirt, kingsman boots. Color: blue",
                'Image'=>'M05.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Navy Cotton, Linen And Silk-blend Suit Pants", 
                'Price'=>'473',
                'Description'=>"Every kingsman needs a navy suit in his arsenal. Wear these pants with a jacket in the same hue to get the look of the spy agency's best-dressed for yourself. They've been tailored in italy from cotton blended with touches of linen and silk for enhanced breathability and a smooth handle",
                'Image'=>'M06.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Blue Slim-fit Pinstriped Wool Suit Pants", 
                'Price'=>'472',
                'Description'=>"Yorkshire-based textile mill savile clifford spun the blue and white pinstriped wool used to make these kingsman suit pants. They're finished with adjustable waist tabs and neatly pressed creases to streamline the slim shape. Have the unfinished hems tailored to your ideal length, then pair them with the matching jacket. Shown here with kingsman shirt, kingsman shoes, kingsman tie, kingsman pocket square. This item is small to size. Color: blue",
                'Image'=>'M07.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Green Slim-fit Cotton-blend Corduroy Suit Jacket", 
                'Price'=>'1209',
                'Description'=>"While kingsman's fictional savile row tailor is stocked with some of the world's finest textiles, the franchise's collection brings the fantasy into effect. This suit jacket is cut from cotton-blend corduroy, sourced from an artisanal clothmaker that specialises in the fabric. Small to size. Color: green",
                'Image'=>'M08.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Slim-fit Prince Of Wales Checked Wool Suit Pants", 
                'Price'=>'478',
                'Description'=>"Patterned with a handsome prince of wales check, kingsman 's pants are a stand-out choice for smart occasions. They're made from soft wool sourced from the storied british mill, savile clifford and are tailored in a neat slim-fit shape. Complete the set with the coordinating jacket. Shown here with kingsman shoes, kingsman jacket, kingsman shirt, kingsman tie, kingsman pocket square. This item is small to size. Color: brown",
                'Image'=>'M09.JPG',
                'Catid'=>'3'
            ),
            array(
                'Name'=>"Kingsman Men's Gray Slim-fit Prince Of Wales Checked Wool Pants", 
                'Price'=>'534',
                'Description'=>"Kingsman's tailoring is made using premium construction methods and traditional patterns, which is what makes it such a smart choice. Crafted from prince of wales checked wool, these pants are cut slim and have side adjusters so you can get the fit just right. Have the unfinished hems altered to your ideal break. Color: gray",
                'Image'=>'M10.JPG',
                'Catid'=>'3'
            ),
        );
        $data4 = array(
            //bỏ vì đã thêm vào db
            array(
                'Name'=>"Kingsman Men's Brown George Cleverley Taron Cap-toe Roughout Leather Boots", 
                'Price'=>'803',
                'Description'=>"George cleverley is an icon amongst fellow british shoemakers, all the craftsmen of his eponymous label undertake an apprenticeship that lasts five years to ensure the brand's exceptional standards are upheld",
                'Image'=>'G01.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"Kingsman Men's Brown George Cleverley Veronique Leather Brogue Chelsea Boots", 
                'Price'=>'830',
                'Description'=>"Kingsman always brings the most esteemed brands on board to collaborate on its designs. These 'veronique' chelsea boots are made by revered cobbler george cleverley, who's been crafting shoes for the likes of sir winston churchill and mr ralph lauren since the late '50s",
                'Image'=>'G02.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"Kingsman Men's Brown George Cleverley Cap-toe Pebble-grain Leather Boots", 
                'Price'=>'709',
                'Description'=>"Chocolate pebble-grain leather (cow), pull tabs, leather linings, dainite rubber soles, lace-up, come with dust bags, made in the uk thanks to their toe caps, metal eyelets and hardy pebble-grain leather construction, these kingsman boots will last you for years to come.",
                'Image'=>'G03.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"Kingsman Men's Brown George Cleverley Vaughn Buckled Nubuck Boots", 
                'Price'=>'1551',
                'Description'=>"Whether in town or country, no kingsman agent would be caught without the appropriate footwear. Inspired by the spy film series, these early 1900s-style mid-calf boots are fashioned from smooth nubuck and detailed with supportive buckles through the length of the leg. They're made in collaboration with george cleverley. Wear it with: kingsman cardigan, kingsman suit pants, kingsman sweater, kingsman coat. Color: brown",
                'Image'=>'G04.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"Kingsman Men's Brown George Cleverley Suede Chukka Boots", 
                'Price'=>'688',
                'Description'=>"Kingsman has worked with london-based footwear label george cleverley since the very start of the movie franchise, mr colin firth and sir michael caine both wore exclusive shoes in the first installment, the secret service.",
                'Image'=>'G05.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"George Cleverley Men's Brown Thomas Cap-toe Leather Monk-strap Shoes", 
                'Price'=>'709',
                'Description'=>"George Cleverley often names its shoes after the icons who've worn them, and this 'Thomas' monk-strap pair is dedicated to the late author Mr Tom Wolfe. They've been made in England from leather tanned a warm shade of brown and detailed with stitched cap-toes and polished silver buckles.",
                'Image'=>'G06.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"George Cleverley Men's Brown Thomas Cap-toe Leather Monk-strap Shoes", 
                'Price'=>'709',
                'Description'=>"George Cleverley often names its shoes after the icons who've worn them, and this 'Thomas' monk-strap pair is dedicated to the late author Mr Tom Wolfe. They've been made in England from leather tanned a warm shade of brown and detailed with stitched cap-toes and polished silver buckles.",
                'Image'=>'G07.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"Kingsman Men's Brown George Cleverley Taron Cap-toe Roughout Leather Boots", 
                'Price'=>'803',
                'Description'=>"George cleverley is an icon amongst fellow british shoemakers, all the craftsmen of his eponymous label undertake an apprenticeship that lasts five years to ensure the brand's exceptional standards are upheld. Created exclusively for kingsman, these classic 'taron' lace-up boots are constructed from tactile roughout leather and set on dainite rubber soles that provide excellent traction. Color: brown",
                'Image'=>'G08.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"George Cleverley Men's Blue Bradley Ii Pebble-grain Nubuck Penny Loafers", 
                'Price'=>'708',
                'Description'=>"Owning george cleverley shoes is a little like owning a piece of history, everyone from sir winston churchill to mr lee alexander mcqueen has worn a pair. These 'bradley ii' loafers have pebble-grain nubuck uppers and are set on durable leather soles. Use the accompanying dust bags to keep them pristine between wears. Color: blue",
                'Image'=>'G09.JPG',
                'Catid'=>'4'
            ),
            array(
                'Name'=>"Axel Arigato Women's Gray Cap-toe Sneakers", 
                'Price'=>'171',
                'Description'=>"With their sleek design, these cap-toe sneakers from axel arigato are crafted from textured gray suede, accented with the label's logo embossed at the side. Upper:bovine leather, sole: rubber. Color: gray",
                'Image'=>'G10.JPG',
                'Catid'=>'4'
            ),
        );
        $data5 = array(
            //bỏ vì đã thêm vào db
            array(
                'Name'=>"Kingsman Men's Metallic Deakin & Francis Gold-plated Signet Ring", 
                'Price'=>'385',
                'Description'=>"Special agents, like those of the kingsman film series, appreciate quality when it comes to their clothing and accessories. Made in partnership with storied jeweler deakin & francis, this ring is cast from gold-plated sterling silver and shaped with a 'k', referencing old-school signet styles. Color: metallic",
                'Image'=>'X01.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Lock & Co Hatters Checked Wool-tweed Flat Cap", 
                'Price'=>'182',
                'Description'=>"Legend has it that a postcard simply addressed to the best hatters in the world, london was once delivered right to lock & co hatters – that's precisely why we teamed up with the heritage brand for our exclusive kingsman collection. This checked flat cap is made from insulating wool-tweed and modeled after styles from the 1920s. Color: brown",
                'Image'=>'X02.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Kingsman Men's Black Smythson Panama Cross-grain Leather Cardholder", 
                'Price'=>'183',
                'Description'=>"Black cross-grain leather (calf), gold designer emblems, four card slots, central compartment, comes in a presentation box. Guaranteed to keep your essentials neatly and stylishly in check, kingsman 's cross-grain leather cardholder is crafted in partnership with british heritage brand smythson, which has been producing luxury stationery and accessories since 1887. ",
                'Image'=>'X03.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Kingsman Men's Black Smythson Panama Cross-grain Leather Cardholder", 
                'Price'=>'210',
                'Description'=>"Black cross-grain leather (calf), gold designer emblem, slip pocket, three internal card slots, central compartment, snap fastening, comes in a presentation box, made in spain. This sleek black cross-grain leather cardholder from kingsman is crafted in partnership with british heritage brand smythson. ",
                'Image'=>'X04.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Kingsman Men's Brown Cutler And Gross Round-frame Acetate And Silver-tone Sunglasses", 
                'Price'=>'425',
                'Description'=>"The kingsman film franchise turns to the aficionados at cutler and gross to create the glasses seen on the silver screen. Inspired by the early 1900s, this round-framed pair is handcrafted from light-brown acetate, with a fine silver-tone bridge and arms. Color: brown",
                'Image'=>'X05.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Kingsman Men's Black Smythson Cross-grain Leather Pouch", 
                'Price'=>'338',
                'Description'=>"Keep currencies well-managed with kingsman's case, handmade by the skilled leather craftsmen of smythson. It's made from flexible cross-grain leather and fitted with orange zips for each of the four compartments. Color: black",
                'Image'=>'X06.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Versace Men's Metallic Gold Medusa Pendant Necklace", 
                'Price'=>'292',
                'Description'=>"Chain link necklace in gold-tone brass. Circular pendant featuring signature carved Medusa and Greek key pattern at drop. Logo disc at adjustable lobster clasp fastening. Approx. Color: metallic",
                'Image'=>'X07.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Versace Men's Metallic Gold Medusa Pendant Necklace", 
                'Price'=>'803',
                'Description'=>"George cleverley is an icon amongst fellow british shoemakers, all the craftsmen of his eponymous label undertake an apprenticeship that lasts five years to ensure the brand's exceptional standards are upheld. Created exclusively for kingsman, these classic 'taron' lace-up boots are constructed from tactile roughout leather and set on dainite rubber soles that provide excellent traction. Color: brown",
                'Image'=>'X08.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Gucci Women's Black GG Marmont Velvet Mini Shoulder Bag", 
                'Price'=>'2044',
                'Description'=>"Velvet is a major trend for the new season, making Gucci's GG Marmont bag a highly coveted piece. Adorned with the label's iconic interlocking logo, this black chevron quilted piece is complemented with gold-toned hardware and a sliding chain strap. Use yours to add a decadent edge to daytime looks.",
                'Image'=>'X09.JPG',
                'Catid'=>'5'
            ),
            array(
                'Name'=>"Palm Angels Women's Blue Padlock Shoulder Bag", 
                'Price'=>'195',
                'Description'=>"Structured plastic shoulder bag in blue. Carry handle at top. Detachable logo webbing shoulder strap with lobster clasp fastening. Logo printed in white at face. Toggle closure. Silver-tone hardware. Approx. 7.5 length x 6.5 height x 2.5 width. Color: blue",
                'Image'=>'X10.JPG',
                'Catid'=>'5'
            ),
        );
        Product::insert($data);
        Product::insert($data2);
        Product::insert($data3);
        Product::insert($data4);
        Product::insert($data5);
        $test =Product::all();
        echo $test;
    }
}
