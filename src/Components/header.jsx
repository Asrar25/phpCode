import React from "react";

const Header = () => {
  return (
    <header className="bg-gray-700 p-4">
      <div className="container mx-auto flex justify-between items-center">
        <div>
          <h1 className="text-2xl font-bold text-white"><span className="text-customRed">Acme</span> Web Design</h1>
        </div>
        <nav>
          <ul className="flex space-x-8 text-xl text-white">
            <li className="hover:text-customRed cursor-pointer"><a href="">Home</a></li>
            <li className="hover:text-customRed cursor-pointer"><a href="">About</a></li>
            <li className="hover:text-customRed cursor-pointer"><a href="">Service</a></li>
          </ul>
        </nav>
      </div>
    </header>
  );
}

export default Header;
