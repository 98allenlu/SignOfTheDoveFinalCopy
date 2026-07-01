import React from "react";
import { shopItems } from "@/app/post-types";
import { QueryLoopItem } from "@/app/patterns/QueryLoopItem";
import { PageHeaderShape } from "@/app/patterns/CoverBlockPattern";

export default function ShopArchiveTemplate() {
  // In a real app, we would filter based on route params or query state
  const categories = ["Yarn", "Handkerchiefs", "Kits"];

  return (
    <div className="min-h-screen bg-background pb-20">
      <PageHeaderShape fillColor="#00416A">
        <h1 className="font-headline text-4xl md:text-6xl mx-[0px] my-[13px]">The Shop</h1>

      </PageHeaderShape>

      <div className="w-full px-4 sm:px-6 lg:px-8 mt-[-200px] relative z-10 pt-[20px] pr-[32px] pb-[0px] pl-[32px] mb-[0px]">
        <div className="bg-white rounded-lg shadow-xl p-8 mb-12">
           <div className="flex flex-wrap gap-4 justify-center">
             <button className="px-6 py-2 bg-primary text-white rounded-md font-heading text-lg">All</button>
             {categories.map(cat => (
               <button key={cat} className="px-6 py-2 bg-muted text-foreground hover:bg-accent hover:text-white rounded-md font-heading text-lg transition-colors">
                 {cat}
               </button>
             ))}
           </div>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {shopItems.map((item) => (
            <QueryLoopItem
              key={item.id}
              title={item.title}
              featured_image={item.featured_image}
              price={item.price}
              category={item.category}
              link={`/shop/${item.slug}`}
              postType="product"
            />
          ))}
          {/* Duplicate for demo purposes to fill grid */}
           {shopItems.map((item) => (
            <QueryLoopItem
              key={`${item.id}-dup`}
              title={item.title}
              featured_image={item.featured_image}
              price={item.price}
              category={item.category}
              link={`/shop/${item.slug}`}
              postType="product"
            />
          ))}
        </div>
      </div>
    </div>
  );
}
