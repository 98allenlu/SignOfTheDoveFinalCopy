import React from "react";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import { SiteHeader } from "@/app/template-parts/SiteHeader";
import { SiteFooter } from "@/app/template-parts/SiteFooter";
import { CartProvider } from "@/app/context/WooCartContext";
import Home from "@/app/templates/FrontPageTemplate";
import Shop from "@/app/templates/ShopArchiveTemplate";
import Research from "@/app/templates/ResearchArchiveTemplate";
import About from "@/app/templates/PageAbout";
import Article from "@/app/templates/SinglePostTemplate";
import Cart from "@/app/templates/CartTemplate";
import Checkout from "@/app/templates/CheckoutTemplate";
import Search from "@/app/templates/SearchResultsTemplate";

export default function App() {
  return (
    <Router>
      <CartProvider>
        <div className="flex flex-col min-h-screen font-sans text-foreground bg-background">
          <SiteHeader />
          <main className="flex-grow">
            <Routes>
              <Route path="/" element={<Home />} />
              <Route path="/shop" element={<Shop />} />
              <Route path="/shop/:slug" element={<Article />} />
              <Route path="/research" element={<Research />} />
              <Route path="/research/:category/:subslug" element={<Article />} />
              <Route path="/research/:slug" element={<Article />} />
              <Route path="/about" element={<About />} />
              <Route path="/cart" element={<Cart />} />
              <Route path="/checkout" element={<Checkout />} />
              <Route path="/search" element={<Search />} />
              <Route path="/shop/*" element={<Shop />} />
              <Route path="/research/*" element={<Research />} />
            </Routes>
          </main>
          <SiteFooter />
        </div>
      </CartProvider>
    </Router>
  );
}
