<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Jaden',
                'image'=>'woman1.jpg',
                'unit_price'=>'400000',
                'promotion_price'=>'360000',
                'description'=>'Mix traditional styling with fun detail with this beautiful A-line wedding dress that features a long lace illusion sleeves and a covered illusion button up back.s',
                'quantity'=>30,
                'id_type'=>1,
                'id_color'=>2,
                'new'=>1
            ],
            [
                'name'=>'Nina',
                'image'=>'woman2.jpg',
                'unit_price'=>'650000',
                'promotion_price'=>'600000',
                'description'=>'An understated beauty, Nina offers classic bridal style with delicately embroidered lace finished with clear sequins for a soft bridal look.',
                'quantity'=>56,
                'id_type'=>1,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Jaden Man',
                'image'=>'manad3.jpg',
                'unit_price'=>'400000',
                'promotion_price'=>'360000',
                'description'=>'Mix traditional styling with fun detail with this beautiful A-line wedding dress that features a long lace illusion sleeves and a covered illusion button up back.s',
                'quantity'=>30,
                'id_type'=>7,
                'id_color'=>2,
                'new'=>1
            ],
            [
                'name'=>'Nina',
                'image'=>'woman2.jpg',
                'unit_price'=>'650000',
                'promotion_price'=>'600000',
                'description'=>'An understated beauty, Nina offers classic bridal style with delicately embroidered lace finished with clear sequins for a soft bridal look.',
                'quantity'=>56,
                'id_type'=>1,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Nigella',
                'image'=>'3.jpg',
                'unit_price'=>'1000000',
                'promotion_price'=>'800000',
                'description'=>'The wide straps are sophisticated and pretty, while the dipped V-neckline is an attractive look. The dainty fabric buttons run down the back of the bodice.',
                'quantity'=>100,
                'id_type'=>1,
                'id_color'=>3,
                'new'=>0
            ],
            [
                'name'=>'Aden',
                'image'=>'4.jpg',
                'unit_price'=>'870000',
                'promotion_price'=>'800000',
                'description'=>'The Mikado fabric creates beautiful clean lines while giving the whole dress a sophisticated but subtle shimmer. Turn around and the back is just as elegant.',
                'quantity'=>96,
                'id_type'=>1,
                'id_color'=>1,
                'new'=>0
            ],
            [
                'name'=>'Astrid',
                'image'=>'5.jpg',
                'unit_price'=>'2000000',
                'promotion_price'=>'1500000',
                'description'=>'This A-line silhouette is dazzling, feminine and effortlessly stunning.',
                'quantity'=>45,
                'id_type'=>1,
                'id_color'=>4,
                'new'=>1
            ],
            [
                'name'=>'Adelpha',
                'image'=>'6.jpg',
                'unit_price'=>'540000',
                'promotion_price'=>'500000',
                'description'=>'Look closely and you’ll see the beautiful floral embroidered lace that covers the bodice with elegant embroidery tape around the waist and across the neckline.',
                'quantity'=>60,
                'id_type'=>1,
                'id_color'=>6,
                'new'=>0
            ],
            [
                'name'=>'Evia',
                'image'=>'7.jpg',
                'unit_price'=>'950000',
                'promotion_price'=>'800000',
                'description'=>'Finished with capped sleeves and a delicately detailed bodice.',
                'quantity'=>40,
                'id_type'=>2,
                'id_color'=>5,
                'new'=>1
            ],
            [
                'name'=>'Madaline',
                'image'=>'8.jpg',
                'unit_price'=>'550000',
                'promotion_price'=>'500000',
                'description'=>'This glamorous sweetheart style has a romantic dress with a gorgeous lace hem. The bodice is covered in pretty lace, which adds texture and interest. Take a closer look and you’ll see that the lace has been embellished with dazzling sequins.',
                'quantity'=>26,
                'id_type'=>2,
                'id_color'=>4,
                'new'=>0
            ],
            [
                'name'=>'Lennox Man',
                'image'=>'man9.jpg',
                'unit_price'=>'550000',
                'promotion_price'=>'500000',
                'description'=>'We love this super playful dress design that’s overflowing with soft tulle and beautiful lace. This gown is embellished with ivory embroidery lace appliques that are scattered across the skirt creating a stunning texture.',
                'quantity'=>345,
                'id_type'=>6,
                'id_color'=>2,
                'new'=>1
            ],
            [
                'name'=>'Darian Man',
                'image'=>'man10.jpg',
                'unit_price'=>'550000',
                'promotion_price'=>'450000',
                'description'=>'This gorgeous wedding dress style features a softly flowing skirt and a bodice embellished with plenty of sparkling beading. This bodice has the best of both worlds by combining an attractively low sweetheart neckline with a higher illusion boat neckline.',
                'quantity'=>80,
                'id_type'=>2,
                'id_color'=>3,
                'new'=>0
            ],
            [
                'name'=>'Ao Dai For Man',
                'image'=>'manad4.jpg',
                'unit_price'=>'640000',
                'promotion_price'=>'600000',
                'description'=>'The classic sweetheart bodice features a romantic lace overlay and three-quarter-length sleeves covered in beautiful appliqués. Take a closer peek and you’ll see the floral embroidered lace.',
                'quantity'=>119,
                'id_type'=>7,
                'id_color'=>3,
                'new'=>1
            ],
            [
                'name'=>'Emery Man',
                'image'=>'man3.jpg',
                'unit_price'=>'410000',
                'promotion_price'=>'380000',
                'description'=>' We just love the effortless pleated bodice! Free-spirited brides will love the sweetheart neckline and floaty chiffon skirt.',
                'quantity'=>74,
                'id_type'=>6,
                'id_color'=>2,
                'new'=>0
            ],
            [
                'name'=>'Holly Man',
                'image'=>'man4.jpg',
                'unit_price'=>'640000',
                'promotion_price'=>'600000',
                'description'=>'The classic sweetheart bodice features a romantic lace overlay and three-quarter-length sleeves covered in beautiful appliqués. Take a closer peek and you’ll see the floral embroidered lace.',
                'quantity'=>119,
                'id_type'=>6,
                'id_color'=>3,
                'new'=>1
            ],
            [
                'name'=>'Shannon',
                'image'=>'11.jpg',
                'unit_price'=>'860000',
                'promotion_price'=>'760000',
                'description'=>'This modern trendsetting aline is covered with beautiful embroidery. Look closely and you’ll see that the delicate embroidery on the bodice has been finished with twinkling beads and pearls. Turn around discover the breathtaking illusion back.',
                'quantity'=>32,
                'id_type'=>2,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Emery Ao Dai',
                'image'=>'manad4.jpg',
                'unit_price'=>'990000',
                'promotion_price'=>'980000',
                'description'=>'An elegant wedding dress, made from swathes of sumptuous satin, it’s striking from all angles. This design harks back to an era of old Hollywood glamour, and the v-shaped neckline and flattering pleated bodice are full of movie star magic.',
                'quantity'=>98,
                'id_type'=>7,
                'id_color'=>2,
                'new'=>0
            ],
            [
                'name'=>'Emery',
                'image'=>'13.jpg',
                'unit_price'=>'450000',
                'promotion_price'=>'390000',
                'description'=>'Feel like a princess in this strapless aline with off-the-shoulder straps is a modern take on a classic style. This all over tulle gown has a fabulous glitter tulle underlayer providing lots of sparkles.',
                'quantity'=>56,
                'id_type'=>3,
                'id_color'=>4,
                'new'=>1
            ],
            [
                'name'=>'Henny',
                'image'=>'14.jpg',
                'unit_price'=>'770000',
                'promotion_price'=>'720000',
                'description'=>'We love the subtle off-the-shoulder lace placement on this dreamy design. Paired with the free-flowing chiffon aline skirt it’s perfect for a relaxed and informal big day look. The oh-so-subtle plunge neckline is provided with gentle coverage.',
                'quantity'=>114,
                'id_type'=>3,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Carmela',
                'image'=>'15.jpg',
                'unit_price'=>'330000',
                'promotion_price'=>'310000',
                'description'=>'A true timeless classic, this lace a-line dress is an elegant choice for your special day. We just love the illusion back feature finished with button detailing.',
                'quantity'=>245,
                'id_type'=>3,
                'id_color'=>4,
                'new'=>0
            ],
            [
                'name'=>'Florence',
                'image'=>'16.jpg',
                'unit_price'=>'600000',
                'promotion_price'=>'550000',
                'description'=>'We love the directional tulle pleats on the bodice of this girly aline design. They’re stylish but also super flattering. The understated sweetheart bodice is embellished with embroidered floral lace motifs that travel up the bodice.',
                'quantity'=>123,
                'id_type'=>4,
                'id_color'=>2,
                'new'=>1
            ],
            [
                'name'=>'Liana',
                'image'=>'17.jpg',
                'unit_price'=>'450000',
                'promotion_price'=>'420000',
                'description'=>'Feel every bit a bride in this wedding dress. Featuring a luxurious illusion bodice with a v-neckline, embellished with shimmering beading adding an extra touch of glitz to your bridal look.',
                'quantity'=>94,
                'id_type'=>4,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Liana Ao Dai',
                'image'=>'manad4.jpg',
                'unit_price'=>'450000',
                'promotion_price'=>'420000',
                'description'=>'Feel every bit a bride in this wedding dress. Featuring a luxurious illusion bodice with a v-neckline, embellished with shimmering beading adding an extra touch of glitz to your bridal look.',
                'quantity'=>94,
                'id_type'=>7,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Drowerson',
                'image'=>'18.jpg',
                'unit_price'=>'250000',
                'promotion_price'=>'200000',
                'description'=>'This intricately embroidered dress is every bride’s dream. The breathtaking lace bodice and illusion sleeves contrast beautifully with the simple Satin skirt.',
                'quantity'=>134,
                'id_type'=>4,
                'id_color'=>4,
                'new'=>0
            ],
            [
                'name'=>'Porsha',
                'image'=>'19.jpg',
                'unit_price'=>'1200000',
                'promotion_price'=>'990000',
                'description'=>'Contemporary and classic this luxury ballgown with its clean-cut silhouette, exceptional pleated skirt and practical pockets is a gown fit for royalty.',
                'quantity'=>65,
                'id_type'=>4,
                'id_color'=>2,
                'new'=>1
            ],
            [
                'name'=>'Ashley',
                'image'=>'20.jpg',
                'unit_price'=>'400000',
                'promotion_price'=>'330000',
                'description'=>'This wedding dress in dreamy chiffon is as effortless as it gets. We just love the draped sleeve design, giving you delicate coverage on your special day.',
                'quantity'=>60,
                'id_type'=>4,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Evita',
                'image'=>'21.jpg',
                'unit_price'=>'530000',
                'promotion_price'=>'490000',
                'description'=>'This super sparkly dress design is a dream for modern princesses. The bodice features an on-trend plunging neckline with discreet illusion panels at the side, so it’s mischievous while still offering plenty of coverage for your big day.',
                'quantity'=>55,
                'id_type'=>4,
                'id_color'=>4,
                'new'=>0
            ],
            [
                'name'=>'Lucia',
                'image'=>'22.jpg',
                'unit_price'=>'700000',
                'promotion_price'=>'660000',
                'description'=>'This glamorous wedding dress has a beautiful aline shape, we love the contrast between the embellished embroidered bodice and the sweeping Mikado skirt. It comes in both ivory and a subtle shade of blush, so you really will be spoilt for choice!',
                'quantity'=>238,
                'id_type'=>5,
                'id_color'=>1,
                'new'=>1
            ],
            [
                'name'=>'Emery',
                'image'=>'23.jpg',
                'unit_price'=>'410000',
                'promotion_price'=>'380000',
                'description'=>' We just love the effortless pleated bodice! Free-spirited brides will love the sweetheart neckline and floaty chiffon skirt.',
                'quantity'=>74,
                'id_type'=>5,
                'id_color'=>2,
                'new'=>0
            ],
            [
                'name'=>'Holly',
                'image'=>'24.jpg',
                'unit_price'=>'640000',
                'promotion_price'=>'600000',
                'description'=>'The classic sweetheart bodice features a romantic lace overlay and three-quarter-length sleeves covered in beautiful appliqués. Take a closer peek and you’ll see the floral embroidered lace.',
                'quantity'=>119,
                'id_type'=>5,
                'id_color'=>3,
                'new'=>1
            ],
            [
                'name'=>'Emery Man',
                'image'=>'man3.jpg',
                'unit_price'=>'410000',
                'promotion_price'=>'380000',
                'description'=>' We just love the effortless pleated bodice! Free-spirited brides will love the sweetheart neckline and floaty chiffon skirt.',
                'quantity'=>74,
                'id_type'=>6,
                'id_color'=>2,
                'new'=>0
            ],
            [
                'name'=>'Holly Man',
                'image'=>'man4.jpg',
                'unit_price'=>'640000',
                'promotion_price'=>'600000',
                'description'=>'The classic sweetheart bodice features a romantic lace overlay and three-quarter-length sleeves covered in beautiful appliqués. Take a closer peek and you’ll see the floral embroidered lace.',
                'quantity'=>119,
                'id_type'=>6,
                'id_color'=>3,
                'new'=>1
            ],

        ]);
    }
}
