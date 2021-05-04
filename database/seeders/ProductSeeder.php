<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new Product();
       $product->name = 'Món quà phú quý';
       $product->category_id = '1';
       $product->title = '<span style="color: rgb(102, 102, 102); font-family: &quot;Source Sans Pro&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, sans-serif; font-size: 16px;">Với sản phẩm Liên kết chung trọn đời đóng phí một lần, Bạn có thể chủ động lên kế hoạch linh hoạt cho tương lai cho cả gia đình ngay từ hôm nay và đảm bảo sự thinh vượng mai sau, để tài sản của bạn được bào toàn và phát triển bển vững.</span>';
       $product->banner = '';
       $product->info = '';
    }
}
